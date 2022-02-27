<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Book;

/**
 * BookSearch represents the model behind the search form of `app\models\Book`.
 */
class BookSearch extends Book
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'pages', 'copy_no', 'create_by', 'status'], 'integer'],
            [['name', 'edition', 'author', 'create_at', 'category'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Book::find();

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
            'pages' => $this->pages,
            'copy_no' => $this->copy_no,
            'create_at' => $this->create_at,
            'create_by' => $this->create_by,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'edition', $this->edition])
            ->andFilterWhere(['like', 'author', $this->author])
            ->andFilterWhere(['like', 'category', $this->category]);

        return $dataProvider;
    }
}
