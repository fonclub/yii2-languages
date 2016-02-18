<?php

namespace fonclub\languages\localeurls;

use Yii;
use yii\bootstrap\ButtonDropdown;

class LanguageSwitcher extends ButtonDropdown
{
    private static $_labels;

    public $label = 'Language';

    public function init()
    {
        $route = Yii::$app->controller->route;
        $appLanguage = Yii::$app->language;
        $params = $_GET;
        $items = [];

        array_unshift($params, $route);

        foreach (Yii::$app->localeUrls->languages as $language) {
            if ($language===$appLanguage) {
                continue;   // Exclude the current language
            }
            $params['language'] = $language;
            $items[] = [
                'label' => self::label($language),
                'url' => Yii::$app->urlManager->createUrl( $params ) ,
            ];
        }

        $this->dropdown['items'] = $items;
        parent::init();
    }

    public static function label($code){
        return isset(self::$_labels[$code]) ? self::$_labels[$code] : null;
    }

    public static function setLabels($labels){
        self::$_labels = $labels;
    }
}