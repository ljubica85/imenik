<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\VrstaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Vrstas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vrsta-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Vrsta', ['create'], ['class' => 'btn btn-success']) ?>
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
