<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\MarkersTables */

$this->title = 'Update Markers Tables: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Markers Tables', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="markers-tables-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
