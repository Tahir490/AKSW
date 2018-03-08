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
    
    <!-- Other Details -->
    <div id="housing_info_others" style="display: none;">    
    <?php echo $form->field($model, 'housing_info_others')->textInput()->label('Other Details') ?>
    </div>

    <?php echo $form->field($model, 'family_type')->dropDownList([ 'Sinlge Family' => 'Sinlge Family', 'Joint Family' => 'Joint Family', ], ['prompt' => 'Select a type']) ?>

    <?php echo $form->field($model, 'house_room')->textInput() ?>

    <?php echo $form->field($model, 'water_source')->dropDownList([ 'Hand pump' => 'Hand pump', 'Closed Well' => 'Closed Well', 'Tube Well' => 'Tube Well', 'Others' => 'Others', ], ['prompt' => 'Select a type', 'onchange'=>'return water_source(this.value)']) ?>

   <div id="water_source_others" style="display: none;">    
    <?php echo $form->field($model, 'water_source_others')->textInput()->label('Other Details') ?>
    </div>

    <?php echo $form->field($model, 'toilet_type')->dropDownList([ 'Flush connected to pit/Septic tank or open drain' => 'Flush connected to pit/Septic tank or open drain', 'Flush connected to public sewerage' => 'Flush connected to public sewerage', 'Others' => 'Others',  ], ['prompt' => 'Select a type', 'onchange'=>'return toilet_type(this.value)']) ?>

    <div id="toilet_type" style="display: none;">
         <?php echo $form->field($model, 'toilet_type_others')->textInput(['maxlength' => true])->label('Other Toilet Details') ?>
    </div>


    <?php echo $form->field($model, 'agricultural_land')->dropDownList([ 'Yes' => 'Yes', 'No' => 'No',  ], ['prompt' => 'Select a type', 'onchange'=>'return agricultural_land(this.value)']) ?>

    <div id="agricultural_land" style="display: none;"> 
        <?php echo $form->field($model, 'agricultur_land_size')->dropDownList([ 'Marla' => 'Marla', 'Kanal' => 'Kanal', 'Acre' => 'Acre', 'Muraba' => 'Muraba', ], ['prompt' => 'Select a type'])->label('Agriculture Land Size') ?>
    </div>

    <?php echo $form->field($model, 'non_agriculrural_land')->dropDownList([ 'Yes' => 'Yes', 'No' => 'No',  ], ['prompt' => 'Select a type', 'onchange'=>'return non_agriculrural_land(this.value)']) ?>

    <div id="non_agricultural_land" style="display: none;"> 
        <?php echo $form->field($model, 'non_agriculrural_land_size')->dropDownList([ 'Marla' => 'Marla', 'Kanal' => 'Kanal', 'Acre' => 'Acre', 'Muraba' => 'Muraba', ], ['prompt' => 'Select a type'])->label('Non-Agriculture Land Size') ?>
    </div>

    <?php echo $form->field($model, 'bank_account_info')->dropDownList([ 'Yes' => 'Yes', 'No' => 'No', ], ['prompt' => 'Select a type', 'onchange'=>'return bank_account_info(this.value)']) ?>

    <div id="bank_account_info" style="display: none;">
    <?php echo $form->field($model, 'account_title')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'account_no')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'bank_name')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'branch_area')->textInput(['maxlength' => true]) ?>
    </div>

    <?php echo $form->field($model, 'child_died')->dropDownList([ 'Yes' => 'Yes', 'No' => 'No',  ], ['prompt' => 'Select a type', 'onchange'=>'return child_died(this.value)'])?>

    <div id="child_died" style="display: none;">
      <?php echo $form->field($model, 'child_died_quantity')->textInput(['maxlength' => true])->label('How Many Children Died?')  ?>  
    </div> 

    <?php echo $form->field($model, 'major_disease')->dropDownList([ 'Yes' => 'Yes', 'No' => 'No',], ['prompt' => 'Select a type', 'onchange'=>'return major_disease(this.value)']) ?>

    <div id="major_disease" style="display: none;">
        <?php echo $form->field($model, 'major_disease_details')->textInput(['maxlength' => true])->label('Disease Details?')  ?>
    </div>

    <?php echo $form->field($model, 'Citizen_card')->dropDownList([ 'Yes' => 'Yes', 'No' => 'No', ], ['prompt' => 'Select a type', 'onchange'=>'return Citizen_card(this.value)']) ?>

    <div id="Citizen_card" style="display: none;">
    <?php echo $form->field($model, 'citizen_card_name')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'citizen_card_no')->textInput(['maxlength' => true]) ?>

    </div>

    <?php echo $form->field($model, 'investment_info')->dropDownList([ 'Yes' => 'Yes', 'No' => 'No', ], ['prompt' => 'Select a type', 'onchange'=>'return investment_info(this.value)']) ?>

    <div id="investment_info" style="display: none;">
     <?php echo $form->field($model, 'investment_details')->textInput(['maxlength' => true])->label('Investment Details') ?>   
    </div>

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

function toilet_type(obj){
    if(obj=="Others"){
        $('#toilet_type').show();
        return false;
    }
    else{
       $('#water_source_others').hide();
        
    }
}

function agricultural_land(obj){
    if(obj=="Yes"){
        $('#agricultural_land').show();
        return false;
    }
    else{
       $('#agricultural_land').hide();
        
    }
}

function non_agriculrural_land(obj){
    if(obj=="Yes"){
        $('#non_agricultural_land').show();
        return false;
    }
    else{
       $('#non_agricultural_land').hide();
        
    }
}

function bank_account_info(obj){
    if(obj=="Yes"){
        $('#bank_account_info').show();
        return false;
    }
    else{
       $('#bank_account_info').hide();
        
    }
}

function child_died(obj){
    if(obj=="Yes"){
        $('#child_died').show();
        return false;
    }
    else{
       $('#child_died').hide();
        
    }
}

function major_disease(obj){
    if(obj=="Yes"){
        $('#major_disease').show();
        return false;
    }
    else{
       $('#major_disease').hide();
        
    }
}

function Citizen_card(obj){
    if(obj=="Yes"){
        $('#Citizen_card').show();
        return false;
    }
    else{
       $('#Citizen_card').hide();
        
    }
}

function investment_info(obj){
    if(obj=="Yes"){
        $('#investment_info').show();
        return false;
    }
    else{
       $('#investment_info').hide();
        
    }
}
</script>
