#!/bin/bash

curl -sS https://getcomposer.org/installer | php
# or 
# php -r "readfile('https://getcomposer.org/installer');" | php

echo "Run composer to install project dependencies?"
select yn in "Yes" "No"; do
    case $yn in
        Yes ) php composer.phar install; break;;
        No ) exit;;
    esac
done
