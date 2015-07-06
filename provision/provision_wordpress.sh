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


