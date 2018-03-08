<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use trntv\yii\datetime\DateTimeWidget;

/* @var $this yii\web\View */
/* @var $model common\models\MemberInfo */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="member-info-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php echo $form->errorSummary($model); ?>

    <?php echo $form->field($model, 'date')->widget(
        DateTimeWidget::className(),
        [
            'phpDatetimeFormat' => 'yyyy-MM-dd\'T\'HH:mm:ssZZZZZ'
        ]
    ) ?>

    <?php echo $form->field($model, 'form_no')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'regional_coucil')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'local_council')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'jamat_khana')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'respondent_name')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'respondent_cnic')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'head_name')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'head_cnic')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'head_fname')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'telephone_no')->textInput() ?>

    <?php echo $form->field($model, 'address_urb')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'village_urb')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'uc_urb')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'tehsil_urb')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'disttrict_urb')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'address_rul')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'village_rul')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'uc_rul')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'tehsil_rul')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'disttrict_rul')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?php echo Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
