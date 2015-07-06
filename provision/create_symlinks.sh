versions=( "4.2.2" "4.1.5" "4.0.5" "3.9.6" "3.8.8" "3.7.8" "3.6.1" "3.5.1" "3.4.2" "3.3.3" "3.2.1" "3.1.4" "3.0.6" "2.9.2" "2.8.6" "2.7.1" "2.6.5" "2.5.1" "2.3.3" "2.2.3" "2.1.3" "2.0.11" "1.5.2"  )
for version in "${versions[@]}"
do
   :
    echo "Symlinking WordPress $version Plugins"
    escapedVersion="${version/./\_}"
    escapedVersion="${escapedVersion/./\_}"

    PLUGINS='/vagrant/plugins/'
    DIRS=`ls -l --time-style="long-iso" $PLUGINS | egrep '^d' | awk '{print $8}'`
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