<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ResidenceInfoSearch */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="residence-info-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?php echo $form->field($model, 'id') ?>

    <?php echo $form->field($model, 'housing_info') ?>

    <?php echo $form->field($model, 'rent_amount') ?>

    <?php echo $form->field($model, 'housing_info_others') ?>

    <?php echo $form->field($model, 'family_type') ?>

    <?php // echo $form->field($model, 'house_room') ?>

    <?php // echo $form->field($model, 'water_source') ?>

    <?php // echo $form->field($model, 'toilet_type') ?>

    <?php // echo $form->field($model, 'agricultural_land') ?>

    <?php // echo $form->field($model, 'non_agriculrural_land') ?>

    <?php // echo $form->field($model, 'bank_account_info') ?>

    <?php // echo $form->field($model, 'account_title') ?>

    <?php // echo $form->field($model, 'account_no') ?>

    <?php // echo $form->field($model, 'bank_name') ?>

    <?php // echo $form->field($model, 'branch_area') ?>

    <?php // echo $form->field($model, 'child_died') ?>

    <?php // echo $form->field($model, 'major_disease') ?>

    <?php // echo $form->field($model, 'Citizen_card') ?>

    <?php // echo $form->field($model, 'citizen_card_name') ?>

    <?php // echo $form->field($model, 'citizen_card_no') ?>

    <?php // echo $form->field($model, 'investment_info') ?>

    <div class="form-group">
        <?php echo Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?php echo Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
