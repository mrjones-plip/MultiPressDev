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

echo "Installing WordPress 4.2.1"
echo "Downloading "
curl -L -s https://wordpress.org/wordpress-4.2.1.tar.gz -o /tmp/wordpress-4.2.1.zip
echo "Untarring "
if [ ! -d "/vagrant/wordpress/4_2_1" ]; then
    mkdir /vagrant/wordpress/4_2_1
fi
rm -rf /vagrant/wordpress/4_2_1/*
tar -xzf /tmp/wordpress-4.2.1.zip -C /vagrant/wordpress/4_2_1
mv /vagrant/wordpress/4_2_1/wordpress/* /vagrant/wordpress/4_2_1/.
rmdir /var/www/wordpress/4_2_1/wordpress/
if [ ! -f /vagrant/wordpress/4_2_1/wp-config.php ]; then
    ln -s /vagrant/provision/wp-config4_2_1.php /vagrant/wordpress/4_2_1/wp-config.php
fi
echo "Injecting SQL "
mysql -u root -e "DROP DATABASE IF EXISTS wordpress4_2_1;CREATE DATABASE IF NOT EXISTS wordpress4_2_1;"
mysql -u root wordpress4_2_1 < /vagrant/provision/wordpress.4.2.1.sql
echo ' Done!'
echo ''


echo "Installing WordPress 4.1.4"
echo "Downloading "
curl -L -s https://wordpress.org/wordpress-4.1.4.tar.gz -o /tmp/wordpress-4.1.4.tar.gz
echo "Untarring "
if [ ! -d "/vagrant/wordpress/4_1_4" ]; then
    mkdir /vagrant/wordpress/4_1_4
fi
rm -rf /vagrant/wordpress/4_1_4/*
tar -xzf /tmp/wordpress-4.1.4.tar.gz -C /vagrant/wordpress/4_1_4
mv /vagrant/wordpress/4_1_4/wordpress/* /vagrant/wordpress/4_1_4/.
rmdir /var/www/wordpress/4_1_4/wordpress/
if [ ! -f /vagrant/wordpress/4_1_4/wp-config.php ]; then
    ln -s /vagrant/provision/wp-config4_1_4.php /vagrant/wordpress/4_1_4/wp-config.php
fi
echo "Injecting SQL "
mysql -u root -e "DROP DATABASE IF EXISTS wordpress4_1_4;CREATE DATABASE IF NOT EXISTS wordpress4_1_4;"
mysql -u root wordpress4_1_4 < /vagrant/provision/wordpress.4.1.4.sql
echo ' Done!'
echo ''

echo 'Updating locate DB'
updatedb
echo ' Done!'
echo ''

echo "Map this to  IP wordpress.dev in /etc/hosts:"
ifconfig|grep -v inet6|grep inet|cut -d ':' -f 2|cut -d ' ' -f 1|egrep -v '127.0.0|10.0'
echo ' Done!'
echo ''

echo "After you added the hosts file go to http://wordpress.dev to see a list of WP versions"
echo "WordPress Web Login: root Password: password"
echo "MySQL login root password NULL"
echo ''
