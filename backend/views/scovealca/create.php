<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Scovealca */

$this->title = Yii::t('app', 'Create Scovealca');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Scovealcas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="scovealca-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
