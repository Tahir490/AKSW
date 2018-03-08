<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\ResidenceInfo */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Residence Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="residence-info-view">

    <p>
        <?php echo Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?php echo Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?php echo DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'housing_info',
            'rent_amount',
            'housing_info_others',
            'family_type',
            'house_room',
            'water_source',
            'toilet_type',
            'agricultural_land',
            'non_agriculrural_land',
            'bank_account_info',
            'account_title',
            'account_no',
            'bank_name',
            'branch_area',
            'child_died',
            'major_disease',
            'Citizen_card',
            'citizen_card_name',
            'citizen_card_no',
            'investment_info',
        ],
    ]) ?>

</div>
