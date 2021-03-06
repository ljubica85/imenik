<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\GradoviSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Gradovis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gradovi-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Gradovi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'ime',
            'oznaka',
            'pozivni_br',
            'postanski_br',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
