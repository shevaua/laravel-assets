# Laravel Assets

This package will help you to manage your assets within layouts. It's so simple to add them:

    <head>
        @assets(<group_id>)
    </head>

## Installation

### 1. install package:
    composer require shevaua/laravel-assets
    
### 2. publish default configuration:
    ./artisan vendor:publish --tag=laravel-assets

### 3. modify configuration(assets.php) and add your own groups:

    'my_group' => [
        '<path1>:<version1>',
        '<path2>:<version2>',
    ],
