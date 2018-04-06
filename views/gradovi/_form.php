<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Gradovi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gradovi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ime')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'oznaka')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pozivni_br')->textInput() ?>

    <?= $form->field($model, 'postanski_br')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
