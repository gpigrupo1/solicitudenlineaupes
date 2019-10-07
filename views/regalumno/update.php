<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Regalumno */

$this->title = 'Update Regalumno: ' . $model->id_alumno;
$this->params['breadcrumbs'][] = ['label' => 'Regalumnos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_alumno, 'url' => ['view', 'id' => $model->id_alumno]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="regalumno-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
