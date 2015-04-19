Marketing
=======================

Introduction
------------
This is a simple marketing performance application. A list shows which campaign generates how much registrations and 
revenue

URL
------------

    http://marketing


Installation
------------

    git clone https://github.com/ATDDWorkshop/marketing.git

Assuming you already have Composer:

    composer.phar install

Add a alias to your /etc/hosts

    127.0.0.1   marketing

### PHP CLI Server

The simplest way to get started if you are using PHP 5.4 or above is to start the internal PHP cli-server in the root directory:

    php -S 0.0.0.0:8080 -t public/ public/index.php

This will start the cli-server on port 8080, and bind it to all network
interfaces.

**Note: ** The built-in CLI server is *for development only*.

### Apache Setup

To setup apache, setup a virtual host to point to the public/ directory of the
project and you should be ready to go! It should look something like below:

    <VirtualHost *:80>
        ServerName marketing
        DocumentRoot /path/to/marketing/public
        SetEnv APPLICATION_ENV "development"
        <Directory /path/to/marketing/public>
            DirectoryIndex index.php
            AllowOverride All
            Order allow,deny
            Allow from all
        </Directory>
    </VirtualHost>
