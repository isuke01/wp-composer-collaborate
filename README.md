# Wordpress Setup Composer

This is base wordpress setup based on composer.

## Getting Started 

Have you ever problems to collaborate in team using WordPress? There is a solution! 
Just download this repository and setup it your way.

This allow you create your WP setup based on composer. Which solve all problem during collaboration.
All plugins, themes, media are stored out of WordPress directory, so you can easly manage them with teammates.

##### wp-config.php 
Is stored in root directory, when WordPress cant find `wp-config.php` file, looking for it one directory above. That's why we can store it into root directory.
This is specially prepared config that use `.env` file and you can find inside setup for directories.

##### WORDPRESS CORE

WordPress is installed into directory `system`

##### WORDPRESS PLUGINS 

Plugins are installed into directory `wp-contet\plugins\{name}`

##### WORDPRESS THEMES 

Themes are installed into directory `wp-content\themes\{name}`

##### MEDIA FILES 

Media files are stored into `wp-content\uploads\{name}`
Previously it was stored in `media` inside root, but Gravity form had some problem with it.

#### .HTACCESS Important

Add this code to .htaccess file to prevent access for your .env files
`<Files ~ "^.*\.([Ee][Nn][Vv])">
 order allow,deny
 deny from all
 satisfy all
</Files>`

##### WORDPRESS MUST USE PLUGINS 

Plugins are installed into directory `wp-content\mu-plugins\{name}`

### Installing / Usage

```
This setup also contain Custom download for ACF PRO if you wish.
```

* Check if `.gitignore` fits your needs
* If you wish change directory names. It can be done inside `wp-config.php` then `composer.json` and `index.php` for system directory
* Create your `.env`.  You can find example `.env-example`
* Add all plugins, themes etc using `composer.json` file. You can check for plugins and thems using [WordPress Packagist](https://wpackagist.org/)
* You can use `Advenced custom fields PRO` by adding your LICENSE key into .env file.


After base setup just run install 
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

#####Other prenium plugins?

### LICENSE
```
Beerware
```
