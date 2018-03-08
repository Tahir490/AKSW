<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\MemberInfoSearch */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="member-info-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?php echo $form->field($model, 'id') ?>

    <?php echo $form->field($model, 'date') ?>

    <?php echo $form->field($model, 'form_no') ?>

    <?php echo $form->field($model, 'regional_coucil') ?>

    <?php echo $form->field($model, 'local_council') ?>

    <?php // echo $form->field($model, 'city') ?>

    <?php // echo $form->field($model, 'jamat_khana') ?>

    <?php // echo $form->field($model, 'respondent_name') ?>

    <?php // echo $form->field($model, 'respondent_cnic') ?>

    <?php // echo $form->field($model, 'head_name') ?>

    <?php // echo $form->field($model, 'head_cnic') ?>

    <?php // echo $form->field($model, 'head_fname') ?>

    <?php // echo $form->field($model, 'telephone_no') ?>

    <?php // echo $form->field($model, 'address_urb') ?>

    <?php // echo $form->field($model, 'village_urb') ?>

    <?php // echo $form->field($model, 'uc_urb') ?>

    <?php // echo $form->field($model, 'tehsil_urb') ?>

    <?php // echo $form->field($model, 'disttrict_urb') ?>

    <?php // echo $form->field($model, 'address_rul') ?>

    <?php // echo $form->field($model, 'village_rul') ?>

    <?php // echo $form->field($model, 'uc_rul') ?>

    <?php // echo $form->field($model, 'tehsil_rul') ?>

    <?php // echo $form->field($model, 'disttrict_rul') ?>

    <div class="form-group">
        <?php echo Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?php echo Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
