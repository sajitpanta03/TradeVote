<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\BookCourse;
use yii\data\Pagination;

/**
 * BookCourseSearch represents the model behind the search form of `common\models\BookCourse`.
 */
class BookCourseSearch extends BookCourse
{
    /**
     * {@inheritdoc}
     */

    public $username;
    public $email;

    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['user_id', 'course_id', 'username', 'email'], 'safe'],
            [['created_at'], 'safe'],
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
        $query = BookCourse::find();

        $count = $query->count(5);

        $pagination = new Pagination(['totalCount' => $count]);

        // add conditions that should always apply here
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => $pagination,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }


        $query->joinWith('user')
            ->joinWith('course');

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'created_at' => $this->created_at,
        ]);


        $query->andFilterWhere(['like', 'user.username', $this->username])
            ->andFilterWhere(['like', 'user.email', $this->email])
            ->andFilterWhere(['like', 'course.name', $this->course_id]);

        return $dataProvider;
    }
}
