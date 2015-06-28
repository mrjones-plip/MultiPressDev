#!/bin/bash
# MultiPressDev  2.0 - 5.8.15

echo "Running 'apt-get update' "
apt-get -qqy update
echo " Done!"
echo ''

echo "Installing LAMP "
export DEBIAN_FRONTEND=noninteractive
apt-get install -qqy  apache2 mysql-server  mysql-client php5 php5-mysql vim curl unzip zip
if [ ! -d /var/www/wordpress ]; then
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

echo "Removing any existing WordPress installs (takes a sec, so hang on...)"
rm -rf /vagrant/wordpress/*
echo " Done!"
echo ''

echo "Uncompressing all versions (takes *much *longer than sec, so hang on some more...)"
tar -xzf /vagrant/provision/wordpress.all.tar.gz -C  /vagrant/wordpress/
mv /vagrant/wordpress/wordpress/* /vagrant/wordpress/.
rm -rf  /vagrant/wordpress/wordpress
echo " Done!"
echo ''


#versions=( "4.2.2" )
versions=( "4.2.2" "4.1.5" "4.0.5" "3.9.6" "3.8.8" "3.7.8" "3.6.1" "3.5.1" "3.4.2" "3.3.3" "3.2.1" "3.1.4" "3.0.6" "2.9.2" "2.8.6" "2.7.1" "2.6.5" "2.5.1" "2.3.3" "2.2.3" "2.1.3" "2.0.11" "1.5.2"  )
for version in "${versions[@]}"
do
   :
    echo "Provisioning WordPress $version"
    escapedVersion="${version/./\_}"
    escapedVersion="${escapedVersion/./\_}"

    if [ ! -f /vagrant/wordpress/$escapedVersion/wp-config.php ]; then
        ln -s /vagrant/provision/config/wp-config$version.php /vagrant/wordpress/$escapedVersion/wp-config.php
        echo ''
    fi
    mysql -u root -e "DROP DATABASE IF EXISTS wordpress$escapedVersion;CREATE DATABASE IF NOT EXISTS wordpress$escapedVersion;"
    mysql -u root wordpress$escapedVersion < /vagrant/provision/sql/wordpress.$version.sql
    mysql -u root wordpress$escapedVersion < /vagrant/provision/reset.root.user.sql
    # thanks http://moinne.com/blog/ronald/bash/list-directory-names-in-bash-shell
    PLUGINS='/vagrant/plugins/'
    DIRS=`ls -l --time-style="long-iso" $PLUGINS | egrep '^d' | awk '{print $8}'`
    echo "Installing Plugins "
    for DIR in $DIRS
    do
        echo "...${DIR}"
        if [ ! -d /var/www/wordpress/$escapedVersion/wp-content/plugins/${DIR} ]; then
            `ln -s /vagrant/plugins/${DIR} /var/www/wordpress/$escapedVersion/wp-content/plugins/${DIR}`
        fi
    done
    echo 'Done!'
    echo ''
done

echo 'Installing PMA'
if [ ! -d /vagrant/pma ]; then
    cd /vagrant;unzip -qq pma.zip;cd;
fi
if [ ! -f /vagrant/pma/config.inc.php ]; then
    ln -s /vagrant/provision/config/pma.config.php /vagrant/pma/config.inc.php
fi
if [ ! -f /vagrant/wordpress/pma ]; then
    ln -s /vagrant/pma /vagrant/wordpress/pma
fi
echo 'Done!'
echo ''

echo 'Updating locate DB and restarting Apache'
updatedb
apachectl restart
echo 'Done!'
echo ''

echo "Go to http://localhost:8080 to see a list of WP versions."
echo "WordPress Web Login: admin Password: password"
echo "and MySQL login root password NULL"
echo ''
