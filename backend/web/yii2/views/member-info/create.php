<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\MemberInfo */

$this->title = 'Create Member Info';
$this->params['breadcrumbs'][] = ['label' => 'Member Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="member-info-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
