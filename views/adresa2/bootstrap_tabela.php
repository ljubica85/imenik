<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\AdresaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Adresas';
$this->params['breadcrumbs'][] = $this->title;
?>

<?php  
 $data = $dataProvider->getModels();                
?>


<div class="adresa-index">
    
    
    <h2> Tabela 1</h2>
    <table class="table">    
    <thead>
      <tr>
        <th>Id</th>  
        <th>Ime</th>
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
      </tr>
    </thead>
    <tbody>
      <?php 
        foreach ($data as $v) {
            echo '<tr>';
            for ($i=0; $i<count($v); $i++)  {                               
                echo '<td>'.$v['ime'].'</td>'; 
            }            
            echo '</tr>';
        }
      
      ?>
    </tbody>
  </table>
    
</div>
