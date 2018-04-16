<?php
use yii\helpers\Html;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\AdresaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title = 'Prve dve adrese po ID:';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="adresa-index">

    <h1><?= Html::encode($this->title) ?></h1>
    
    
    <?php 
        // promenljiva $data tipa multidim. niz:
        $data = $dataProvider->getModels();        
        foreach ($data as $v) {
            foreach ($v as $d) {
                echo $d;
                echo '<br />';
            }
            echo '-------------------';
            echo '<br />';
        }