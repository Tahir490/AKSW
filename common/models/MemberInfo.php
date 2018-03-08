<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "member_info".
 *
 * @property int $id
 * @property string $date
 * @property string $form_no
 * @property string $regional_coucil
 * @property string $local_council
 * @property string $city City/Central JK
 * @property string $jamat_khana
 * @property string $respondent_name Full Full Name of Respondent
 * @property string $respondent_cnic CNIC of Respondent
 * @property string $head_name Full Name of Household Head
 * @property string $head_cnic CNIC of Household Head
 * @property string $head_fname Full Name of Father/Spouse Household Head
 * @property int $telephone_no Telephone No.
 * @property string $address_urb Address(Urban)
 * @property string $village_urb Village/city
 * @property string $uc_urb Union Council
 * @property string $tehsil_urb Taluka/Tehsil
 * @property string $disttrict_urb Address(rural)
 * @property string $address_rul
 * @property string $village_rul
 * @property string $uc_rul
 * @property string $tehsil_rul
 * @property string $disttrict_rul
 */
class MemberInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'member_info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date'], 'safe'],
            [['telephone_no'], 'integer'],
            [['form_no', 'regional_coucil', 'local_council', 'city', 'jamat_khana', 'respondent_name', 'respondent_cnic', 'head_name', 'head_cnic', 'head_fname', 'address_urb', 'village_urb', 'uc_urb', 'tehsil_urb', 'disttrict_urb', 'address_rul', 'village_rul', 'uc_rul', 'tehsil_rul', 'disttrict_rul'], 'string', 'max' => 200],
            [['respondent_cnic'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Date',
            'form_no' => 'Form No',
            'regional_coucil' => 'Regional Coucil',
            'local_council' => 'Local Council',
            'city' => 'City',
            'jamat_khana' => 'Jamat Khana',
            'respondent_name' => 'Respondent Name',
            'respondent_cnic' => 'Respondent Cnic',
            'head_name' => 'Head Name',
            'head_cnic' => 'Head Cnic',
            'head_fname' => 'Head Fname',
            'telephone_no' => 'Telephone No',
            'address_urb' => 'Address Urb',
            'village_urb' => 'Village Urb',
            'uc_urb' => 'Uc Urb',
            'tehsil_urb' => 'Tehsil Urb',
            'disttrict_urb' => 'Disttrict Urb',
            'address_rul' => 'Address Rul',
            'village_rul' => 'Village Rul',
            'uc_rul' => 'Uc Rul',
            'tehsil_rul' => 'Tehsil Rul',
            'disttrict_rul' => 'Disttrict Rul',
        ];
    }
}
