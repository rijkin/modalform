<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\components\cart;


/* @var $this yii\web\View */
/* @var $searchModel ProductSearch\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $model common\models\Product */


$this->title = Yii::t('app', 'Products');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>



    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'name',
                'label' => 'Name',
                'value' => function ($data){
                    return Html::a($data->name,['product/view','id'=>$data->id]);
                },
                'format'=>'raw'
            ],
            'price',
            'description',
            Yii::$app->cart(['CartController/actionAddItem', 'id' => $model->id]),

            [

                'id'=>'grid-custom-button',

                'data-pjax'=>true,

                'action'=>Yii::$app->cart(['CartController/actionAddItem', 'id' => $model->id]),

                'class'=>'button btn btn-default',

            ]

        ],
    ]); ?>


</div>
