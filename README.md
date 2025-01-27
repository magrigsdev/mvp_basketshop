# mvp_basketshop
Install PHPBrew (PHP version manager):

Follow installation guide at: https://github.com/phpbrew/phpbrew
Install phpbrew with variants
phpbrew install php-8.2.27 +default+sqlite+openssl # builds out php with some dependent variants
phpbrew switch php-8.2.27 # sets php version
Install required PHP extensions:
phpbrew ext install iconv
phpbrew ext install ctype
Install Composer (PHP dependency manager):

Follow installation steps at: https://getcomposer.org/download/
Run composer install to install dependencies
Set up local development server:

Install Symfony CLI from: https://symfony.com/download
Start the server: symfony server:start
Access the application:

Open your browser and navigate to: http://localhost:8000/

# requirements:
Installing Doctrine
First, install Doctrine support via the orm Symfony pack, as well as the MakerBundle, which will help generate some code:
composer require symfony/orm-pack
composer require --dev symfony/maker-bundle

The PHPUnit Testing Framework
Symfony integrates with an independent library called PHPUnit to give you a rich testing framework. This article won't cover PHPUnit itself, which has its own excellent documentation.

Before creating your first test, install symfony/test-pack, which installs some other packages needed for testing (such as phpunit/phpunit):
composer require --dev symfony/test-pack
After the library is installed, try running PHPUnit:

php bin/phpunit

After that, you can create the test database and all tables using:
php bin/console --env=test doctrine:database:create

o be able to test the comment list, the pagination, and the form submission, we need to populate the database with some data. And we want the data to be the same between test runs to make the tests pass. Fixtures are exactly what we need.

Install the Doctrine Fixtures bundle:
symfony composer req orm-fixtures --dev

PHP CS Fixer is a very useful tool for automatically formatting code according to coding standards (like PSR-12). Here's how to use it with a Symfony project.
composer require --dev friendsofphp/php-cs-fixer
