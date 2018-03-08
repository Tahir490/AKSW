<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "residence_info".
 *
 * @property int $id
 * @property string $housing_info
 * @property int $rent_amount
 * @property string $family_type
 * @property int $house_room
 * @property string $water_source
 * @property string $toilet_type
 * @property string $agricultural_land
 * @property string $non_agriculrural_land
 * @property string $bank_account_info
 * @property string $account_title
 * @property string $account_no
 * @property string $bank_name
 * @property string $branch_area
 * @property string $child_died
 * @property string $major_disease
 * @property string $Citizen_card
 * @property string $citizen_card_name
 * @property string $citizen_card_no
 * @property string $investment_info
 */
class ResidenceInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'residence_info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['housing_info', 'family_type'], 'string'],
            [['rent_amount', 'house_room'], 'integer'],
            [['water_source', 'toilet_type', 'agricultural_land', 'non_agriculrural_land', 'bank_account_info', 'account_title', 'account_no', 'bank_name', 'branch_area', 'child_died', 'major_disease', 'Citizen_card', 'citizen_card_name', 'citizen_card_no', 'investment_info'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'housing_info' => 'Housing Info',
            'rent_amount' => 'Rent Amount',
            'family_type' => 'Family Type',
            'house_room' => 'House Room',
            'water_source' => 'Water Source',
            'toilet_type' => 'Toilet Type',
            'agricultural_land' => 'Agricultural Land',
            'non_agriculrural_land' => 'Non Agriculrural Land',
            'bank_account_info' => 'Bank Account Info',
            'account_title' => 'Account Title',
            'account_no' => 'Account No',
            'bank_name' => 'Bank Name',
            'branch_area' => 'Branch Area',
            'child_died' => 'Child Died',
            'major_disease' => 'Major Disease',
            'Citizen_card' => 'Citizen Card',
            'citizen_card_name' => 'Citizen Card Name',
            'citizen_card_no' => 'Citizen Card No',
            'investment_info' => 'Investment Info',
        ];
    }
}
