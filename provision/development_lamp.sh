#!/bin/bash
# MultiPressDev  1.0 - 4.1.15

echo "Running 'apt-get update' "
apt-get -qqy update
echo " Done!"
echo ''

echo "Installing LAMP "
export DEBIAN_FRONTEND=noninteractive
apt-get install -qqy  apache2 mysql-server  mysql-client php5 php5-mysql vim curl
if [ ! -f /var/www/wordpress ]; then
    ln -s /vagrant/wordpress /var/www/
fi
if [ ! -f /etc/apache2/sites-available/100-wordpress.dev.conf ]; then
    ln -s /vagrant/provision/100-wordpress.dev.conf /etc/apache2/sites-available/
fi
mysql -u root -e "GRANT ALL PRIVILEGES ON *.* TO 'root'@'%' IDENTIFIED BY '' WITH GRANT OPTION; FLUSH PRIVILEGES;"
a2ensite 100-wordpress.dev.conf
service apache2 reload
echo " Done!"
echo ''

# define a versions in MultiPressDev
versions=( "4.2.1" "4.1.4")
for version in "${versions[@]}"
do
   :
    echo "Installing WordPress $version"
    echo "Downloading "
    escapedVersion="${version/./\_}"
    escapedVersion="${escapedVersion/./\_}"

    curl -L -s https://wordpress.org/wordpress-$version.tar.gz -o /tmp/wordpress-$version.zip
    echo "Untarring "
    if [ ! -d "/vagrant/wordpress/$escapedVersion" ]; then
        mkdir /vagrant/wordpress/$escapedVersion
    fi
    rm -rf /vagrant/wordpress/$escapedVersion/*
    tar -xzf /tmp/wordpress-$version.zip -C /vagrant/wordpress/$escapedVersion
    mv /vagrant/wordpress/$escapedVersion/wordpress/* /vagrant/wordpress/$escapedVersion/.
    rmdir /var/www/wordpress/$escapedVersion/wordpress/
    if [ ! -f /vagrant/wordpress/$escapedVersion/wp-config.php ]; then
        ln -s /vagrant/provision/wp-config$version.php /vagrant/wordpress/$escapedVersion/wp-config.php
    fi
    mysql -u root -e "DROP DATABASE IF EXISTS wordpress$escapedVersion;CREATE DATABASE IF NOT EXISTS wordpress$escapedVersion;"
    mysql -u root wordpress$escapedVersion < /vagrant/provision/wordpress.$version.sql
    echo 'Done!'
    echo ''
done

echo 'Updating locate DB and restarting Apache'
updatedb
apachectl restart
echo ' Done!'
echo ''

echo "Add this IP in your /etc/hosts for wordpress.dev:"
ifconfig|grep -v inet6|grep inet|cut -d ':' -f 2|cut -d ' ' -f 1|egrep -v '127.0.0|10.0'
echo ''

echo "After you added the hosts file go to http://wordpress.dev to see a list of WP versions"
echo "WordPress Web Login: root Password: password"
echo "MySQL login root password NULL"
echo ''
