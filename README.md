# Create wordpress plugins plan

## 001 What are plugins
    
    Plugin load order
---
1. configuration file is loaded
2. Functions and Classes loaded
3. Plugins are loaded
4. Process all code & requests
5. Load translations
6. Load theme
7. Load page content
---

### Editing wp-config.php
```php

//Debug
define('WP_DEBUG', true); //set after development  as true

//Increase PHP Memory to 256MB
define( 'WP_MAX_MEMORY_LIMIT', '256M' );

//Cache
define( 'WP_CACHE', true );

//Automatic Database Optimizing
define( 'WP_ALLOW_REPAIR', true );
```

## 002 Creating a Plugin File Header

## 003 Activating Our Plugin

## 004 1 Simple Trick to Secure a Plugin

## 005 Creating a Custom Post Type

## 006 Metadata and Metaboxes

## 007 Enqueueing Files

## 008 Working with Meta Data

## 009 Filter Hooks

## 010 Making our Strings Translatable

## 011 Creating Database Tables

## 012 Including the jQuery Rating Plugin

## 013 Sending AJAX Requests from the Front End

## 014 Handling AJAX Requests and Inserting Data into the Database

## 015 Averaging and Displaying the Rating

## 016 Changing the Custom Post Types Table Columns

## 017 Creating a Widget

## 018 Cron Jobs

## 019 Transients API

## 020 Finalizing our Widget

## 021 Creating a Shortcode

## 022 Including the WordPress Content Editor

## 023 Sanitizing HTML Input and Inserting a Post

## 024 Extending our Plugin with the Plugin API

## 025 Sending an E-mail with our Custom Hook
