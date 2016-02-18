<?php

namespace fonclub\languages\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use fonclub\languages\models\Languages;

/**
 * LanguagesSearch represents the model behind the search form about `common\models\Languages`.
 */
class LanguagesSearch extends Languages
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'is_default'], 'integer'],
            [['url', 'locale', 'name'], 'safe'],
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
        $query = Languages::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'is_default' => $this->is_default,
        ]);

        $query->andFilterWhere(['like', 'url', $this->url])
            ->andFilterWhere(['like', 'locale', $this->locale])
            ->andFilterWhere(['like', 'name', $this->name]);

        return $dataProvider;
    }
}
