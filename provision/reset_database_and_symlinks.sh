versions=("4.3" "4.2.2" "4.1.5" "4.0.5" "3.9.6" "3.8.8" "3.7.8" "3.6.1" "3.5.1" "3.4.2" "3.3.3" "3.2.1" "3.1.4" "3.0.6" "2.9.2" "2.8.6" "2.7.1" "2.6.5" "2.5.1" "2.3.3" "2.2.3" "2.1.3" "2.0.11" "1.5.2"  )
for version in "${versions[@]}"
do
   :
    echo "Provisioning WordPress Config and Database $version"
    escapedVersion="${version/./\_}"
    escapedVersion="${escapedVersion/./\_}"

    if [ ! -f /vagrant/wordpress/$escapedVersion/wp-config.php ]; then
        ln -s /vagrant/provision/config/wp-config$version.php /vagrant/wordpress/$escapedVersion/wp-config.php
        echo ''
    fi
    mysql -u root -e "DROP DATABASE IF EXISTS wordpress$escapedVersion;CREATE DATABASE IF NOT EXISTS wordpress$escapedVersion;"
    mysql -u root wordpress$escapedVersion < /vagrant/provision/sql/wordpress.$version.sql
    mysql -u root wordpress$escapedVersion < /vagrant/provision/reset.root.user.sql
    echo 'Done!'
    echo ''
done