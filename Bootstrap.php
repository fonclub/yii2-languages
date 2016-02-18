<?php

namespace fonclub\languages;

use yii\base\BootstrapInterface;

/**
 * Class Bootstrap
 * @package fonclub\pages
 */
class Bootstrap implements BootstrapInterface
{
    /**
     * @param \yii\base\Application $app
     */
    public function bootstrap($app)
    {
        $backend = strpos($app->controllerNamespace, 'backend') === false ? false : true;
        if( $backend )
            $app->urlManager->addRules(
                [
                    '<_m:languages>' => '<_m>/admin/index',
                    '<_m:languages>/<_a>' => '<_m>/admin/<_a>',
                ],
                false
            );
    }
}
