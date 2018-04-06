<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "korisnici".
 *
 * @property int $id
 * @property string $ime
 * @property string $prezime
 * @property int $vrsta_id
 * @property int $adresa_id
 * @property int $broj
 * @property int $gradovi_id
 * @property string $telefon
 */
class Korisnici extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'korisnici';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ime', 'prezime', 'vrsta_id', 'adresa_id', 'broj', 'gradovi_id', 'telefon'], 'required'],
            [['vrsta_id', 'adresa_id', 'broj', 'gradovi_id'], 'integer'],
            [['ime', 'prezime'], 'string', 'max' => 50],
            [['telefon'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ime' => 'Ime',
            'prezime' => 'Prezime',
            'vrsta_id' => 'Vrsta ID',
            'adresa_id' => 'Adresa ID',
            'broj' => 'Broj',
            'gradovi_id' => 'Gradovi ID',
            'telefon' => 'Telefon',
        ];
    }
}
