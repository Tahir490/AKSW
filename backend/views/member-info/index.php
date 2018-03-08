<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\MemberInfoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Member Infos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="member-info-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php echo Html::a('Create Member Info', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php echo GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'date',
            //'form_no',
            'regional_coucil',
            'local_council',
            // 'city',
            // 'jamat_khana',
            // 'respondent_name',
            // 'respondent_cnic',
            // 'head_name',
            // 'head_cnic',
            // 'head_fname',
             'telephone_no',
            // 'address_urb',
            // 'village_urb',
            // 'uc_urb',
            // 'tehsil_urb',
            // 'disttrict_urb',
             'address_rul',
            // 'village_rul',
            // 'uc_rul',
            // 'tehsil_rul',
            // 'disttrict_rul',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
