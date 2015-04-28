#!/bin/bash

#echo "• Installing Vbox additional ...  "
#/etc/init.d/vboxadd setup
#echo "  ... Done"

echo "• Installing LAMP ..."
export DEBIAN_FRONTEND=noninteractive
apt-get -q install -y mlocate  apache2 mysql-server  mysql-client php5
ln -s /vagrant/sidecar /var/www/
ln -s /vagrant/provision/100-sidecar.test.conf /etc/apache2/sites-available/
a2ensite 100-sidecar.test.conf
service apache2 reload
echo "  ... Done"

#echo "• Starting Apache & MySQL, injecting base MySQL data ..."
#service httpd restart
#service mysqld restart
#mysql -u root -e "GRANT ALL PRIVILEGES ON *.* TO 'root'@'%' IDENTIFIED BY '' WITH GRANT OPTION; FLUSH PRIVILEGES;"
#echo "  ... Done"

#echo "• Persist Apache & Mysql deamons ..."
#chkconfig httpd on
#chkconfig mysqld on
#echo "  ... Done"

echo "• Map this to  IP sidecar.dev in /etc/hosts:"
ifconfig|grep -v inet6|grep inet|cut -d ':' -f 2|cut -d ' ' -f 1|egrep -v '127.0.0|10.0'
echo "  ... Done"

echo "• After you added the hosts file go to http://sidecar.dev"
