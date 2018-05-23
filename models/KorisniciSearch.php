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
	public $fullName;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
//            [['id', 'vrsta_id', 'adresa_id', 'gradovi_id'], 'integer'],
            [['id', 'gradovi_id'], 'integer'],
            [['ime', 'prezime', 'broj', 'telefon', 'vrsta_id', 'adresa_id', 'fullName'], 'safe'],
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
        $query = Korisnici::find();
        $query->joinWith('vrsta');
		$query->joinWith('adresa');

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
		
		$dataProvider->setSort([
			'attributes' => [
				'id',
				'fullName' => [
					'asc' => ['ime' => SORT_ASC, 'prezime' => SORT_ASC],
					'desc' => ['ime' => SORT_DESC, 'prezime' => SORT_DESC],
					'label' => 'Full Name',
					'default' => SORT_ASC
					]
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
//            'vrsta_id' => $this->vrsta_id,
//            'adresa_id' => $this->adresa_id,
            'gradovi_id' => $this->gradovi_id,
        ]);

        $query->andFilterWhere(['like', 'ime', $this->ime])
            ->andFilterWhere(['like', 'prezime', $this->prezime])
            ->andFilterWhere(['like', 'broj', $this->broj])
            ->andFilterWhere(['like', 'telefon', $this->telefon])
            ->andFilterWhere(['like', 'vrsta.ime', $this->vrsta_id])
			->andFilterWhere(['like', 'adresa.ime', $this->adresa_id]);

        return $dataProvider;
    }
}
