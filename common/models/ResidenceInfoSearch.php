<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\ResidenceInfo;

/**
 * ResidenceInfoSearch represents the model behind the search form about `common\models\ResidenceInfo`.
 */
class ResidenceInfoSearch extends ResidenceInfo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'rent_amount', 'house_room'], 'integer'],
            [['housing_info', 'housing_info_others', 'family_type', 'water_source', 'toilet_type', 'agricultural_land', 'non_agriculrural_land', 'bank_account_info', 'account_title', 'account_no', 'bank_name', 'branch_area', 'child_died', 'major_disease', 'Citizen_card', 'citizen_card_name', 'citizen_card_no', 'investment_info'], 'safe'],
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
        $query = ResidenceInfo::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'rent_amount' => $this->rent_amount,
            'house_room' => $this->house_room,
        ]);

        $query->andFilterWhere(['like', 'housing_info', $this->housing_info])
            ->andFilterWhere(['like', 'housing_info_others', $this->housing_info_others])
            ->andFilterWhere(['like', 'family_type', $this->family_type])
            ->andFilterWhere(['like', 'water_source', $this->water_source])
            ->andFilterWhere(['like', 'toilet_type', $this->toilet_type])
            ->andFilterWhere(['like', 'agricultural_land', $this->agricultural_land])
            ->andFilterWhere(['like', 'non_agriculrural_land', $this->non_agriculrural_land])
            ->andFilterWhere(['like', 'bank_account_info', $this->bank_account_info])
            ->andFilterWhere(['like', 'account_title', $this->account_title])
            ->andFilterWhere(['like', 'account_no', $this->account_no])
            ->andFilterWhere(['like', 'bank_name', $this->bank_name])
            ->andFilterWhere(['like', 'branch_area', $this->branch_area])
            ->andFilterWhere(['like', 'child_died', $this->child_died])
            ->andFilterWhere(['like', 'major_disease', $this->major_disease])
            ->andFilterWhere(['like', 'Citizen_card', $this->Citizen_card])
            ->andFilterWhere(['like', 'citizen_card_name', $this->citizen_card_name])
            ->andFilterWhere(['like', 'citizen_card_no', $this->citizen_card_no])
            ->andFilterWhere(['like', 'investment_info', $this->investment_info]);

        return $dataProvider;
    }
}
