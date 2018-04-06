<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "gradovi".
 *
 * @property int $id
 * @property string $ime
 * @property string $oznaka
 * @property int $pozivni_br
 * @property int $postanski_br
 */
class Gradovi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gradovi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ime', 'oznaka', 'pozivni_br', 'postanski_br'], 'required'],
            [['pozivni_br', 'postanski_br'], 'integer'],
            [['ime'], 'string', 'max' => 50],
            [['oznaka'], 'string', 'max' => 2],
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
            'oznaka' => 'Oznaka',
            'pozivni_br' => 'Pozivni Br',
            'postanski_br' => 'Postanski Br',
        ];
    }
}
