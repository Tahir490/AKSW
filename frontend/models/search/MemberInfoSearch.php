<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\MemberInfo;

/**
 * MemberInfoSearch represents the model behind the search form about `common\models\MemberInfo`.
 */
class MemberInfoSearch extends MemberInfo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'telephone_no'], 'integer'],
            [['date', 'form_no', 'regional_coucil', 'local_council', 'city', 'jamat_khana', 'respondent_name', 'respondent_cnic', 'head_name', 'head_cnic', 'head_fname', 'address_urb', 'village_urb', 'uc_urb', 'tehsil_urb', 'disttrict_urb', 'address_rul', 'village_rul', 'uc_rul', 'tehsil_rul', 'disttrict_rul'], 'safe'],
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
        $query = MemberInfo::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'date' => $this->date,
            'telephone_no' => $this->telephone_no,
        ]);

        $query->andFilterWhere(['like', 'form_no', $this->form_no])
            ->andFilterWhere(['like', 'regional_coucil', $this->regional_coucil])
            ->andFilterWhere(['like', 'local_council', $this->local_council])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'jamat_khana', $this->jamat_khana])
            ->andFilterWhere(['like', 'respondent_name', $this->respondent_name])
            ->andFilterWhere(['like', 'respondent_cnic', $this->respondent_cnic])
            ->andFilterWhere(['like', 'head_name', $this->head_name])
            ->andFilterWhere(['like', 'head_cnic', $this->head_cnic])
            ->andFilterWhere(['like', 'head_fname', $this->head_fname])
            ->andFilterWhere(['like', 'address_urb', $this->address_urb])
            ->andFilterWhere(['like', 'village_urb', $this->village_urb])
            ->andFilterWhere(['like', 'uc_urb', $this->uc_urb])
            ->andFilterWhere(['like', 'tehsil_urb', $this->tehsil_urb])
            ->andFilterWhere(['like', 'disttrict_urb', $this->disttrict_urb])
            ->andFilterWhere(['like', 'address_rul', $this->address_rul])
            ->andFilterWhere(['like', 'village_rul', $this->village_rul])
            ->andFilterWhere(['like', 'uc_rul', $this->uc_rul])
            ->andFilterWhere(['like', 'tehsil_rul', $this->tehsil_rul])
            ->andFilterWhere(['like', 'disttrict_rul', $this->disttrict_rul]);

        return $dataProvider;
    }
}
