<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Adresa;

/**
 * AdresaSearch represents the model behind the search form of `frontend\models\Adresa`.
 */
class AdresaSearch extends Adresa
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['ime'], 'safe'],
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
        $query = Adresa::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
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

        $query->andFilterWhere(['like', 'ime', $this->ime]);

        return $dataProvider;
    }
	
	public function prveDveAdrese($params){
			$query = Adresa::find()->orderBy('id');
			$dataProvider = new ActiveDataProvider([
			'query'=>$query,
			'pagination'=>[
				'pageSize'=> 2
			],
			]);
			
			$this->load($params);
			
			if(!$this->validate()){
				// uncomment the following line if you do not want to return any records when validation fails
				// $query->where('0=1');
				return $dataProvider;
			}
		return $dataProvider;
	}
	
	public function vratiAdresuPodaci($params) {
        $query = Adresa::find();                

        $dataProvider = new ActiveDataProvider([
            'query' => $query,            
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        return $dataProvider;
    }
}
