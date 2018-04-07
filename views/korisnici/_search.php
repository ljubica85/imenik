<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\KorisniciSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="korisnici-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'ime') ?>

    <?= $form->field($model, 'prezime') ?>

    <?= $form->field($model, 'vrsta_id') ?>

    <?= $form->field($model, 'adresa_id') ?>

    <?php // echo $form->field($model, 'broj') ?>

    <?php // echo $form->field($model, 'gradovi_id') ?>

    <?php // echo $form->field($model, 'telefon') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
