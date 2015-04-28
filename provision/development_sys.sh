#!/bin/bash
#hostname devdev
#yum update 
#yum install -y gcc mlocate man kernel-devel
apt-get update
apt-get -q install -y mlocate vim
updatedb
echo "  ... Done"
