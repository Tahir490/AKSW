<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\MemberInfo */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Member Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="member-info-view">

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
            'date',
            'form_no',
            'regional_coucil',
            'local_council',
            'city',
            'jamat_khana',
            'respondent_name',
            'respondent_cnic',
            'head_name',
            'head_cnic',
            'head_fname',
            'telephone_no',
            'address_urb',
            'village_urb',
            'uc_urb',
            'tehsil_urb',
            'disttrict_urb',
            'address_rul',
            'village_rul',
            'uc_rul',
            'tehsil_rul',
            'disttrict_rul',
        ],
    ]) ?>

</div>
