<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use frontend\models\Vrsta;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model frontend\models\Korisnici */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="korisnici-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ime')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'prezime')->textInput(['maxlength' => true]) ?>

    
    
    <?php                     
        $query = Vrsta::find()->select(["vrsta.id as id, 
                                            CONCAT(
                                                vrsta.ime, 
                                                ''
                                            ) AS ime"]);                                        
        $data = ArrayHelper::map($query->asArray()->all(),'id', 'ime');                               
        echo $form->field($model, 'vrsta_id')->widget(Select2::classname(), [
            'model' => $model,
            'data' => $data,            
            'language' => 'en',
            'options' => ['placeholder' => 'izaberite vrstu',                                                   
            ],
            'pluginOptions' => [
                'allowClear' => true,
                'width' => '300px',                               
            ],              
        ])->label('Vrsta');
    ?>

    <?= $form->field($model, 'adresa_id')->textInput() ?>

    <?= $form->field($model, 'broj')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gradovi_id')->textInput() ?>

    <?= $form->field($model, 'telefon')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
