<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "adresa".
 *
 * @property int $id
 * @property string $ime
 *
 * @property Korisnici[] $korisnicis
 */
class Adresa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'adresa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ime'], 'required'],
            [['ime'], 'string', 'max' => 256],
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKorisnicis()
    {
        return $this->hasMany(Korisnici::className(), ['adresa_id' => 'id']);
    }
}
