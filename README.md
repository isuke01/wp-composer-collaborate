# Wordpress Setup Composer

This is base wordpress setup based on composer.

## Getting Started 

Have you ever problems with collaborate WordPress themes? There is a solution! 
Just download this repository and setup it your way.

This allow you create your WP setup based on composer. Which solve all problem during collaboration.
All plugins, themes, media are stored out of WordPress directory, so you can easly manage them with teammates.

##### wp-config.php 
Is stored in root directory, when WordPress cant find `wp-config.php` file, looking for it one directory above. That's why we can store it into root directory.
This is specially prepared config that use `.env` file and you can find inside setup for directories.

##### WORDPRESS CORE

WordPress is installed into directory `system`

##### WORDPRESS PLUGINS 

Plugins are installed into directory `modules\plugins\{name}`

##### WORDPRESS THEMES 

Themes are installed into directory `modules\themes\{name}`

##### MEDIA FILES 

Media files are stored into `media` directory

##### WORDPRESS MUST USE PLUGINS 

Plugins are installed into directory `modules\mu-plugins\{name}`

### Installing / Usage

```
This setup also contain Custom download for ACF PRO if you wish.
```

* Check if `.gitignore` fits your needs
* If you wish change directories however you want. It can set it inside `wp-config.php` then `composer.json` and `index.php` for system directory
* Create file your `.env`.  you can find example `.env-example`
* Add all plugins, themes etc you want into `composer.json` file you can check for those [WordPress Packagist](https://wpackagist.org/)
* You can use `Advenced custom fields PRO` by adding your LICENSE key into .env file.
* Create as part of your project repo.


After those steps you want to do 
```
composer install
```
For updates
```
composer update
```

### Built With
* [PHP dotenv](https://github.com/vlucas/phpdotenv) - Required for .ENV
* [WordPress Packagist](https://wpackagist.org/) - WP repo for composer
* [Composer](https://github.com/composer/installers) - Composer installers

### Notes

** Other prenium plugins? **
Sorry I have no idea yet, mostly because I never need other :)

### LICENSE
```
Beerware
```