fonclub/yii2-languages
===================

Модуль для работы с языками сайта

## Installation

Install the package through [composer](http://getcomposer.org):

    composer require fonclub/yii2-languages

And then add this to your application configuration:

frontend and backend config main.php

```php
    'urlManager' => [
        'class'=>'fonclub\languages\localeurls\UrlManager',
        'enablePrettyUrl'=>true,
        'showScriptName'=>false
    ]
```

common config main.php

```php
    'components' => [
        'localeUrls' => [
                'class' => 'fonclub\languages\localeurls\LocaleUrls',
                'enableDefaultSuffix' => true
        ],
```