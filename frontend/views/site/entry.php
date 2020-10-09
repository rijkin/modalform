<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap\Modal;

?>

<?php $form = ActiveForm::begin([
    'action' => \yii\helpers\Url::to(['site/entry'])
]); ?>


<?= $form->field($model, 'name') ?>

<?= $form->field($model, 'email') ?>

<?= $form->field($model, 'phone') ?>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>