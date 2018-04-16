<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\GradoviSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Gradovis';
$this->params['breadcrumbs'][] = $this->title;
?>

<?php  
 $data = $dataProvider->getModels();                
?>


<div class="gradovi-index">
    
    
    <h2> Tabela 1</h2>
    <table class="table">    
    <thead>
      <tr>
        <th>Id</th>  
        <th>Ime</th>
        <th>Oznaka</th>
        <th>Pozivni broj</th>
        <th>Postanski broj</th>
      </tr>
    </thead>
    <tbody>
      <?php 
        foreach ($data as $v) {
            echo '<tr>';
            foreach ($v as $i=>$z) {                
                echo '<td>';
                echo $z; 
                echo '</td>';                            
            }            
            echo '</tr>';
        }
      
      ?>
    </tbody>
  </table>
    
 <br /> 
 
 <h2> Tabela 2</h2>
    <table class="table">    
    <thead>
      <tr>        
        <th>Ime</th>
        <th>Oznaka</th>        
        <th>Postanski broj</th>
      </tr>
    </thead>
    <tbody>
      <?php 
        foreach ($data as $v) {
            echo '<tr>';
            for ($i=0; $i<count($v); $i++)  {                               
                echo '<td>'.$v['ime'].'</td><td>'.$v['oznaka'].'</td><td>'.$v['postanski_br'].'</td>'; 
            }            
            echo '</tr>';
        }
      
      ?>
    </tbody>
  </table>
    
</div>
