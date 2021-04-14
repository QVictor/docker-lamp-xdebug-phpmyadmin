# Preset for Docker

## What is included

### images:
+ php:7.3-apache

+ mysql:8.0.16

+ xdebug-2.7.1

+ phpmyadmin/phpmyadmin:4.8

### also:
+ automatic deployment db dump in directory "dump"

## How to install
    
Just build and run composition
    
    docker-compose up -d --build

##### Mysql export dump, you must wait about one minute!