#!/bin/bash

echo echo "Running 'apt-get update' "
apt-get update

echo "Installing LAMP "
export DEBIAN_FRONTEND=noninteractive
apt-get -q install -y  apache2 mysql-server  mysql-client php5 php5-mysql vim curl
ln -s /vagrant/wordpress /var/www/
ln -s /vagrant/provision/100-wordpress.test.conf /etc/apache2/sites-available/
a2ensite 100-wordpress.test.conf
service apache2 reload
echo " Done!"
echo ''

echo "Installing WordPress"
echo "Downloading "
curl -L -s http://wordpress.org/latest.tar.gz -o /tmp/wordpress.latest.tar.gz
echo "Untarring "
rm -rf /vagrant/wordpress/.
tar -xzf /tmp/wordpress.latest.tar.gz -C /var/www/wordpress/
mv /vagrant/wordpress/wordpress/* /vagrant/wordpress/.
rmdir /vagrant/wordpress/wordpress/
ln -s /vagrant/provision/wp-config.php /vagrant/wordpress/
echo "Injecting SQL "
mysql -u root -e "GRANT ALL PRIVILEGES ON *.* TO 'root'@'%' IDENTIFIED BY '' WITH GRANT OPTION; FLUSH PRIVILEGES;CREATE DATABASE IF NOT EXISTS wordpress;"
mysql -u root wordpress < /vagrant/provision/wordpress.clean.sql
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

echo "After you added the hosts file go to http://wordpress.dev or http://wordpress.dev/wp-admin/install.php"
echo "WordPress Web Login: root Password: password"
echo "MySQL login root password NULL"
echo ''
