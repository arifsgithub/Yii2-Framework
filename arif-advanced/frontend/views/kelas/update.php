<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Kelas */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Kelas',
]) . $model->nama;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Kelas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nama, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="kelas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
