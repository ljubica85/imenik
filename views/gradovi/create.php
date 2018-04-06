<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Gradovi */

$this->title = 'Create Gradovi';
$this->params['breadcrumbs'][] = ['label' => 'Gradovis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gradovi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
