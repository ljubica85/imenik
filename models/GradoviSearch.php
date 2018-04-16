<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Gradovi;

/**
 * GradoviSearch represents the model behind the search form of `frontend\models\Gradovi`.
 */
class GradoviSearch extends Gradovi
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'pozivni_br', 'postanski_br'], 'integer'],
            [['ime', 'oznaka'], 'safe'],
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
        $query = Gradovi::find();

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
            'pozivni_br' => $this->pozivni_br,
            'postanski_br' => $this->postanski_br,
        ]);

        $query->andFilterWhere(['like', 'ime', $this->ime])
            ->andFilterWhere(['like', 'oznaka', $this->oznaka]);

        return $dataProvider;
    }
    
    public function prvaDvaGrada($params) {
        
        $query = Gradovi::find()->orderBy("id");

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 2,
             ],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        return $dataProvider;
    }
    
    public function vratiGradPodaci($params) {
        
        
        $query = Gradovi::find();                

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
