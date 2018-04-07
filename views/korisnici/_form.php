<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Korisnici */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="korisnici-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ime')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'prezime')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vrsta_id')->textInput() ?>

    <?= $form->field($model, 'adresa_id')->textInput() ?>

    <?= $form->field($model, 'broj')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gradovi_id')->textInput() ?>

    <?= $form->field($model, 'telefon')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
