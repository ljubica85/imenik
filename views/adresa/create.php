<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Adresa */

$this->title = 'Create Adresa';
$this->params['breadcrumbs'][] = ['label' => 'Adresas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="adresa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
