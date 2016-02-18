<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Languages */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="languages-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php $form->errorSummary($model); ?>

    <?php echo $form->field($model, 'url')->textInput(['maxlength' => 20]) ?>

    <?php echo $form->field($model, 'locale')->textInput(['maxlength' => 20]) ?>

    <?php echo $form->field($model, 'name')->textInput(['maxlength' => 64]) ?>

    <?php echo $form->field($model, 'is_default')->textInput() ?>

    <div class="form-group">
        <?php echo Html::submitButton($model->isNewRecord ? Yii::t('backend', 'Create') : Yii::t('backend', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
