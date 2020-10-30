<?php
use yii\helpers\Html;
use yii\bootstrap\Modal;
?>
<p>Contact Form</p>

<ul>
    <li><label>Nume</label>: <?= Html::encode($model->name) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
    <li><label>Telefon</label>: <?= Html::encode($model->phone) ?></li>
</ul>