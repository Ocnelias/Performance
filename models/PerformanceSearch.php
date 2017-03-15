<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Performance;

/**
 * PerformanceSearch represents the model behind the search form about `app\models\Performance`.
 */
class PerformanceSearch extends Performance
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'performance_duration', 'created_at', 'updated_at', 'artist_id', 'place_id'], 'integer'],
            [['performance_title', 'performance_date', 'performance_description'], 'safe'],
            [['performance_price'], 'number'],
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
        $query = Performance::find();

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
            'performance_date' => $this->performance_date,
            'performance_duration' => $this->performance_duration,
            'performance_price' => $this->performance_price,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'artist_id' => $this->artist_id,
            'place_id' => $this->place_id,
        ]);

        $query->andFilterWhere(['like', 'performance_title', $this->performance_title])
            ->andFilterWhere(['like', 'performance_description', $this->performance_description]);

        return $dataProvider;
    }
}
