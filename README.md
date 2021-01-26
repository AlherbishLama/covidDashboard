## Run laravel project for mac os
###### Note : use equivalent library mangers that supports your os if you are not mac user .

1-  Install Homebrew :

 /usr/bin/ruby -e "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install)"

2- Install PHP with Homebrew :

brew install php

3- Install MySQL :

brew install mysql


4- Install Composer :

    1.  https://getcomposer.org click Download
    
    2. php composer-setup.php --install-dir=bin --filename=composer ##
    
    3. Make Composer globally accessible : mv composer.phar /usr/local/bin/composer
    
    4. composer install

5- brew services restart mysql

6- run : mysql -uroot

  1. Enter :CREATE DATABASE statisticsDB;
  
  2. exit;
  
7- php artisan migrate

8- https://nodejs.org/en/ download

9- npm run watch 

10- php artisan serve
