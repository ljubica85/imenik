<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $searchModel frontend\models\GradoviSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Prva dva grada po ID:';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gradovi-index">

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
        
        
    ?>
    
    
    
    
</div>
