<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\MarkersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Markers Tables';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="markers-tables-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Markers Tables', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'address',
            'lat',
            'lng',
            'date',
            // 'rgb',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
<script src="/vendor/bower/PapaParse-4.1.2/papaparse.js"></script>
<input type="file" id="input" value="/vendor/bower/PapaParse-4.1.2/papaparse.js" 
       onchange="papa(this.files)">
<script> 
    
   function papa(){
       var file = document.getElementById('input').files[0];
    
        Papa.parse(file, {
	step: function(row) {

	        console.log("Row:", row.data[1
                    http://maps.googleapis.com/maps/api/geocode/json?address=Иваново&sensor=false&language=ru

	    },

	    complete: function() {

	        console.log("All done!");

	    }
});}
</script>