# Wordpress Setup Composer

This is base wordpress setup based on composer.

## Getting Started 

Have you ever problems with collaborate WordPress themes? There is a solution! 
Just download this repository and setup it your way.

This allow you create your WP setup based on composer. Which solve all problem during collaboration.
All plugins, themes, media are stored out of WordPress directory, so you can easly manage them with teammates.

##### wp-config.php 
Is stored in root directory, WordPress when cant find `wp-config.php` file, looking for it one directory above. That's why we can store it into root directory.
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

### Installing

After download this repository 
`This setup also contain Custom download for ACF PRO if you wish.`

* Check if `.gitignore` fits your needs
* If you wish change directories however you want. It can set it inside `wp-config.php` then `composer.json` and `index.php` for system directory
* Create file your `.env`.  you can find example `.env-example`
* Add all plugins, themes etc you need into `composer.json` file 
* You can use `Advenced custom fields PRO` by adding your LICENSE key into .env file.