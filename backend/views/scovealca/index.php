<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ScovealcaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Scovealcas');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="scovealca-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Scovealca'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]);
    $d = '12';
     ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [

            [
                'attribute' => 'name',
                'label' => 'Name',
                'value' => function ($data){
                    return Html::a($data->name,['scovealca/view','id'=>$data->id]);
                },
                'format'=>'raw'
            ],
            [
                'attribute' => 'email',
                'label' => 'eMail',
                'value' => function ($data){
                    return Html::a($data->email,['scovealca/update','id'=>$data->id]);
                },
                'format'=>'raw'
            ],
            'phone',

            ['class' => 'yii\grid\ActionColumn'],
        ],

    ]); ?>


</div>
