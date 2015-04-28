#!/bin/bash

#echo "• Installing Vbox additional ...  "
#/etc/init.d/vboxadd setup
#echo "  ... Done"

echo "• Installing LAMP ..."
export DEBIAN_FRONTEND=noninteractive
apt-get -q install -y mlocate  apache2 mysql-server  mysql-client php5
updatedb
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

echo "• Getting IP Addresses ... pick one:"
ifconfig|grep -v inet6|grep inet|cut -d ':' -f 2|cut -d ' ' -f 1|egrep -v '127.0.0|10.0'
echo "  ... Done"