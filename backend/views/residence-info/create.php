<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ResidenceInfo */

$this->title = 'Create Residence Info';
$this->params['breadcrumbs'][] = ['label' => 'Residence Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="residence-info-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
