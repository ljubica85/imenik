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
 * @property string $broj
 * @property int $gradovi_id
 * @property string $telefon
 * @property string $fullName
 *
 * @property Vrsta $vrsta
 * @property Adresa $adresa
 * @property Gradovi $gradovi
 */
class Korisnici extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    
    public $fullName;
    public $vrsta;
    public $adresa;
    
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
            [['vrsta_id', 'adresa_id', 'gradovi_id'], 'integer'],
            [['ime', 'prezime'], 'string', 'max' => 50],
            [['vrsta', 'adresa', 'fullName'], 'safe'],            
            [['broj', 'telefon'], 'string', 'max' => 20],
            [['vrsta_id'], 'exist', 'skipOnError' => true, 'targetClass' => Vrsta::className(), 'targetAttribute' => ['vrsta_id' => 'id']],
            [['adresa_id'], 'exist', 'skipOnError' => true, 'targetClass' => Adresa::className(), 'targetAttribute' => ['adresa_id' => 'id']],
            [['gradovi_id'], 'exist', 'skipOnError' => true, 'targetClass' => Gradovi::className(), 'targetAttribute' => ['gradovi_id' => 'id']],
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
			'fullName' => 'Full Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVrsta()
    {
        return $this->hasOne(Vrsta::className(), ['id' => 'vrsta_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdresa()
    {
        return $this->hasOne(Adresa::className(), ['id' => 'adresa_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGradovi()
    {
        return $this->hasOne(Gradovi::className(), ['id' => 'gradovi_id']);
    }
	
	 /**
     * @return \yii\db\ActiveQuery
     */
//    public function getFullName()
//	{
//		return $this->ime . ' ' . $this->prezime;
//	}
}