fonclub/yii2-languages
===================

Модуль для работы с языками сайта
```
frontend and backend config main.php
    'urlManager' => [
        'class'=>'fonclub\languages\localeurls\UrlManager',
        'enablePrettyUrl'=>true,
        'showScriptName'=>false
    ]

common config main.php

    'components' => [
        'localeUrls' => [
                'class' => 'fonclub\languages\localeurls\LocaleUrls',
                'enableDefaultSuffix' => true
        ],