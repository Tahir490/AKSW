<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ResidenceInfo */

$this->title = 'Update Residence Info: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Residence Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="residence-info-update">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
