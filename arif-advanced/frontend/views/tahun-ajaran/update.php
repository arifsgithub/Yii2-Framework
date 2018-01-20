<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\TahunAjaran */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Tahun Ajaran',
]) . $model->nama;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tahun Ajaran'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nama, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="tahun-ajaran-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
