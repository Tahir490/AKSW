<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\MemberInfo */

$this->title = 'Update Member Info: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Member Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="member-info-update">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
