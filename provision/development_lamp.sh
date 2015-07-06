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


if [ ! -d /vagrant/wordpress/1_5_2/ ]; then
	/bin/bash /vagrant/provision/provision_wordpress.sh
fi

/bin/bash /vagrant/provision/reset_database_and_symlinks.sh
/bin/bash /vagrant/provision/create_symlinks.sh

echo 'Installing PMA'
if [ ! -d /vagrant/pma ]; then
    cd /vagrant;unzip -qq pma.zip;cd;
fi
if [ ! -f /vagrant/pma/config.inc.php ]; then
    ln -s /vagrant/provision/config/pma.config.php /vagrant/pma/config.inc.php
fi
if [ ! -d /vagrant/wordpress/pma ]; then
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
