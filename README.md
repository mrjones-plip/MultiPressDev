# MultiPressDev

## Overview

Run all the [WordPress](https://wordpress.org) versions in a single
VM. Allows easily cross version WordPress plugin development or
multi-version testing.  Runs in an Ubuntu 14.04 VM.

## Install

### Prerequisites

You should have git, of course, as well as
[Vagrant](https://www.vagrantup.com/)  and [Virtual Box](https://www.virtualbox.org/) installed
before starting. To ensure these are all set up, test with these commands.  Each one
should output a version:

<pre>git --version
vagrant --version
VBoxManage --version</pre>

If you're missing one, go install it before going further!

### Download and Boot

WARNING - every "provision" or "up" of vagrant will *DELETE* your WordPress
Database!

1. Clone this repo
1. `cd` into the repo
1. type `vagrant up`
1. Go to http://localhost:8080/ in a browser
1. Enjoy

### Auto provision plugins

If you're a plugin developer you can copy your plugin into the "plugins" folder.  When
MultiPressDev provisions each instance of WordPress, it will symlink in the one plugin
directory to each instance.  You will then need to log in and activate the plugin.  This will
allow you to easily test your plugin on all the different versions.

If you've already run "vagrant up" before you copied in your plugins, no problem!  Just copy
the your plugin to the plugin folder and then run "vagrant provision".  The symlinks will
be recreated.

REMEMBER - Every time you run "provision" or "up" of vagrant, it will *DELETE* your
WordPress Database!

### Supported versions

Currently, MultiPressDev supports the following versions of WordPress: "4.2.2" "4.1.5" "4.0.5" "3.9.6" "3.8.8" "3.7.8" "3.6.1" "3.5.1" "3.4.2" "3.3.3" "3.2.1" "3.1.4" "3.0.6" "2.9.2" "2.8.6" "2.7.1" "2.6.5" "2.5.1" "2.3.3" "2.2.3" "2.1.3" "2.0.11" "1.5.2" "1.2.2".

*NOTE* - There is a known bug in MultiPressDev which means that it does not
support versions 1.2.2 through 2.5.1. This will be fixed in a future release.

However, if, you only want to install 4.2.2 (latest as of this writing), you can just
swap out which line is commented out in the Vagrant file.  So take these two lines:

<code>#versions=( "4.2.2" )</code>

<code>versions=( "4.2.2" "4.1.5" "4.0.5" "3.9.6" "3.8.8" "3.7.8" "3.6.1" "3.5.1" "3.4.2" "3.3.3" "3.2.1" "3.1.4" "3.0.6" "2.9.2" "2.8.6" "2.7.1" "2.6.5" "2.5.1" "2.3.3" "2.2.3" "2.1.3" "2.0.11" "1.5.2" "1.2.2" )</code>

And make it look like this:

<code>versions=( "4.2.2" )</code>

<code>#versions=( "4.2.2" "4.1.5" "4.0.5" "3.9.6" "3.8.8" "3.7.8" "3.6.1" "3.5.1" "3.4.2" "3.3.3" "3.2.1" "3.1.4" "3.0.6" "2.9.2" "2.8.6" "2.7.1" "2.6.5" "2.5.1" "2.3.3" "2.2.3" "2.1.3" "2.0.11" "1.5.2"  )</code>

As well, you could copy in just the versions you want to install. Otherwise,
the first "up" of vagrant will take a while as it downloads all the versions.  On subsequent
"provissions", these downloads are chached.

### Log In Credientials

WordPress log in is:
* login: admin
* password: password

MySQL log in is:
* login: root
* password: NULL (no password set)

## Release History

### 2.0 - 5.8.15
* Add caching for already download versions
* Add versions 1.5.2 - 4.2.2 of WordPress
* Introduce bug where 1.5.2  - 2.5.1 are broken. Fix TBD but error log shows "PHP Warning:  require_once(/vagrant/provision/config/wp-settings.php)".  So likely we'll need to provision a wp-settings.php file for
these earlier versions.

### 1.4 - 5.8.15
* Ahem, instruct folks to install VirtualBox too.  Kinda important.

### 1.3 - 5.8.15
* Allow plugins to easily be added
* Remove option for wordpress.dev, localhost is just easier to set up.

### 1.2 - 5.8.15
* Fix release dates (April != May)
* Allow localhost

### 1.1 - 5.2.15
* Add loop in provision script
* Fix missing "wordpress" folder

### 1.0 - 5.1.15
* Initial release to port from using latest to static versions of WP
* Only support 4.2.1 and 4.1.4 for now
