# WP Composer Boilerplate

It is a simple way to make Wordpress site using only `git clone` and `composer update`

## Getting Started

1. Create project in your development environment, and clone this repository.
2. Make sure that Composer is installed. Run `composer install` or `composer update`.
3. Edit wp-config.php, define your DB access, make new Authentication Unique Keys and Salts.

### Features

1. The Composer configuration installs the latest version of Wordpress and moves the files to the `/wp/` subdirectory for security reasons.
2. WP_HOME and other constants define the url of the site from $_SERVER, and not from the DB in permalinks and options.
3. Path constants allow to deploy the site with the help of the wp-config.php and do not replace the domain name in the DB.

### Optional

1. `.gitignore` generated by phpStorm. 
4. 4 `WP_DEBUG` constants.

### Requirements

PHP >= 5.3
Git
Composer

## Author

Evgeny Veliky, https://github.com/Veliky

## License

This project is licensed under the MIT License - see the LICENSE.md file for details.