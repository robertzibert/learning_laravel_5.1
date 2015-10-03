#!/usr/bin/env bash
sudo apt-get update

sudo apt-get install -y vim tmux curl wget build-essential python-software-properties git

sudo add-apt-repository -y ppa:ondrej/php5
sudo add-apt-repository -y ppa:chris-lea/node.js


sudo apt-get update && sudo apt-get dist-upgrade


#php dependencies
sudo apt-get install -y php5 php5-mysql php5-curl php5-gd php5-mcrypt nodejs


# Composer
curl -sS https://getcomposer.org/installer | php
sudo mv composer.phar /usr/local/bin/composer

#Bower
sudo npm install bower -g
