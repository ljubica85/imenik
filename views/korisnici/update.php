<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Korisnici */

$this->title = 'Update Korisnici: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Korisnicis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="korisnici-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
