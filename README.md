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

<code>git --version
vagrant --version
VBoxManage --version</code>

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

### Log In Credientials

WordPress log in is:
* login: root
* password: password

MySQL log in is:
* login: root
* password: NULL (no password set)

## Roadmap
* Allow automatic install of plugins and themes
* Add more WP versions
* Keep WP versions local instead of downloading from wp.org?

## Release History

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
