<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ResidenceInfo */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="residence-info-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php echo $form->errorSummary($model); ?>

   <?php echo $form->field($model, 'housing_info')->dropDownList([ 'Own' => 'Own', 'Rented' => 'Rented', 'Others' => 'Others', ], ['prompt' => 'Select a type', 'onchange'=>'return housing_info(this.value)'])->label('Housing Infornation') ?>
   

    <div id="rented" style="display: none;">    
    <?php echo $form->field($model, 'rent_amount')->textInput() ?>
    </div>

      <div id="housing_info_others" style="display: none;">    
    <?php echo $form->field($model, 'housing_info_others')->textInput()->label('Other Details') ?>
    </div>

    <?php echo $form->field($model, 'family_type')->dropDownList([ 'Sinlge Family' => 'Sinlge Family', 'Joint Family' => 'Joint Family', ], ['prompt' => 'Select a type']) ?>

    <?php echo $form->field($model, 'house_room')->textInput() ?>

   <?php echo $form->field($model, 'water_source')->dropDownList([ 'Hand pump' => 'Hand pump', 'Closed Well' => 'Closed Well', 'Tube Well' => 'Tube Well', 'Others' => 'Others', ], ['prompt' => 'Select a type', 'onchange'=>'return water_source(this.value)']) ?>

   <div id="water_source_others" style="display: none;">    
    <?php echo $form->field($model, 'water_source_others')->textInput()->label('Other Details') ?>
    </div>

    <?php echo $form->field($model, 'toilet_type')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'agricultural_land')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'non_agriculrural_land')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'bank_account_info')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'account_title')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'account_no')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'bank_name')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'branch_area')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'child_died')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'major_disease')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'Citizen_card')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'citizen_card_name')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'citizen_card_no')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'investment_info')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?php echo Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<script>
  
function housing_info(obj){
    if(obj=="Rented"){
        $('#rented').show();
        $('#housing_info_others').hide();
        return false;
    }else 
    if(obj=="Others"){
        $('#housing_info_others').show();
        $('#rented').hide();
        return false;
    }
    else{
       $('#rented').hide();
        $('#housing_info_others').hide(); 
    }
}

function water_source(obj){
    if(obj=="Others"){
        $('#water_source_others').show();
        return false;
    }
    else{
       $('#water_source_others').hide();
        
    }
}
</script>
