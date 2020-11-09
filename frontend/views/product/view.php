<?php


use yii\helpers\Html;
use yii\web\YiiAsset;
use yii\widgets\DetailView;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Product */
/* @var $review common\models\Review */
/* @var \yii\data\ActiveDataProvider $reviewsDataProvider */
/* @var $form ActiveForm */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Products'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
YiiAsset::register($this);
?>
<div class="product-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'name',
            'price',
            'description'
        ],
    ]) ?>

<?php
echo \yii\grid\GridView::widget([
     'dataProvider'=> $reviewsDataProvider,
    'columns'=>[
            'name',
        'created_at',
        'text_body',
    ]
]);
?>


</div>
Create a Review!
<div class="reviews">


    <?php $form = ActiveForm::begin(['action'=>'/product/create-review']); ?>

    <?= $form->field($review, 'name') ?>
    <?= $form->field($review, 'created_at') ?>
    <?= $form->field($review, 'text_body') ?>
    <?= $form->field($review, 'product_id') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div><!-- reviews -->
