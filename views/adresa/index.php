<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\AdresaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Adresas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="adresa-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Adresa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'ime',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
