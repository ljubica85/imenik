<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Korisnici;

/**
 * KorisniciSearch represents the model behind the search form of `frontend\models\Korisnici`.
 */
class KorisniciSearch extends Korisnici
{
	
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
//            [['id', 'vrsta_id', 'adresa_id', 'gradovi_id'], 'integer'],
            [['id', 'gradovi_id'], 'integer'],
            [['ime', 'prezime', 'broj', 'telefon', 'vrsta_id', 'adresa_id'], 'safe'],
            [['fullName', 'vrsta', 'adresa'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Korisnici::find()->select(["k.id as id, concat(k.ime, ' ', k.prezime) as fullName,  
                                             v.ime as vrsta, a.ime as adresa, k.broj as broj"]);
        $query->from('korisnici as k');
        $query->joinWith('vrsta as v');
		$query->joinWith('adresa as a');

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
		
        $dataProvider->setSort([
                'attributes' => [
                        'id',
                        'fullName',
                        'vrsta',
                        'adresa',
                        'broj',
                        ]
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'concat(k.ime, \' \', k.prezime)', $this->fullName])                
            ->andFilterWhere(['like', 'broj', $this->broj])            
            ->andFilterWhere(['like', 'v.ime', $this->vrsta])
	    ->andFilterWhere(['like', 'a.ime', $this->adresa]);

        return $dataProvider;
    }
}