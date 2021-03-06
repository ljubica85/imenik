<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\KorisniciSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Korisnicis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="korisnici-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Korisnici', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'ime',
            // 'prezime',
            // 'vrsta_id',	    
            [
			'label' => 'Full Name',
            'attribute'=>'fullName',            
            ],
            /*[
			'label' => 'Vrsta',
            'attribute'=>'vrsta',            
            ],*/
	    //'adresa_id',
            [
            'label' => 'Adresa',
            'attribute'=>'adresa',                          
            ],
			'broj',
			[
            'label' => 'Grad',
            'attribute'=>'gradovi',                          
            ],
            //'gradovi_id',
            //'telefon',
            'id',			

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>