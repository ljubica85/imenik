<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Korisnici */

$this->title = 'Create Korisnici';
$this->params['breadcrumbs'][] = ['label' => 'Korisnicis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="korisnici-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
