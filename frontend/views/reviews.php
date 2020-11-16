<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Review */
/* @var $form ActiveForm */
?>
<div class="reviews">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'name') ?>

        <?= $form->field($model, 'text_body') ?>
        <?= $form->field($model, 'product_id') ?>
    
        <div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- reviews -->
