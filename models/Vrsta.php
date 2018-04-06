<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "vrsta".
 *
 * @property int $id
 * @property string $ime
 */
class Vrsta extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vrsta';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ime'], 'required'],
            [['ime'], 'string', 'max' => 50],
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
}
