<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\MarkersTables */

$this->title = 'Create Markers Tables';
$this->params['breadcrumbs'][] = ['label' => 'Markers Tables', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="markers-tables-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
