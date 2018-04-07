<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Vrsta */

$this->title = 'Create Vrsta';
$this->params['breadcrumbs'][] = ['label' => 'Vrstas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vrsta-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
