<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Languages */

$this->title = Yii::t('backend', 'Create {modelClass}', [
    'modelClass' => 'Languages',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Languages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="languages-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
