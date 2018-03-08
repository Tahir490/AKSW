<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ResidenceInfoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Residence Infos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="residence-info-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php echo Html::a('Create Residence Info', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php echo GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'housing_info',
            'rent_amount',
            'housing_info_others',
            'family_type',
            // 'house_room',
            // 'water_source',
            // 'water_source_others',
            // 'toilet_type',
            // 'toilet_type_others',
            // 'agricultural_land',
            // 'agricultur_land_size',
            // 'non_agriculrural_land',
            // 'non_agriculrural_land_size',
            // 'bank_account_info',
            // 'account_title',
            // 'account_no',
            // 'bank_name',
            // 'branch_area',
            // 'child_died',
            // 'child_died_quantity',
            // 'major_disease',
            // 'major_disease_details',
            // 'Citizen_card',
            // 'citizen_card_name',
            // 'citizen_card_no',
            // 'investment_info',
            // 'investment_details',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
