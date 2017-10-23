# Crunchbag
Make sure you have php 5 installed
1) CD into the project's root directory 
2) Run "php -S localhost:4444"
3) Access the home page at localhost:4444/home.php


With XAMPP

1) Make sure the project root is in xampp's htdocs folder
2) Change YOUR_PASSWORD in databaseCrendentials.php to your local 
password for mysql
3) Create/Load the database by opening localhost/Crunchbag/Admin-Tools/build-script.php in your browser
4) Access the website at localhost/Crunchbag/home.php

Adding Email

1) php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
2) php -r "if (hash_file('SHA384', 'composer-setup.php') === '544e09ee996cdf60ece3804abc52599c22b1f40f4323403c44d44fdfdd586475ca9813a858088ffbc1f233e9b180f061') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
3) php composer-setup.php
4) php -r "unlink('composer-setup.php');"
5) php composer.phar init
6) composer require phpmailer/phpmailer
7) php composer.phar install
