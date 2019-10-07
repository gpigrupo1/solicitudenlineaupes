<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Solicitante */

$this->title = 'Update Paciente: ' . $model->idpaciente;
$this->params['breadcrumbs'][] = ['label' => 'Solicitante', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idpaciente, 'url' => ['view', 'id' => $model->idpaciente]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="solicitante-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
