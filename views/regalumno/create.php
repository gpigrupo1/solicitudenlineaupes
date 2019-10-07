<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Regalumno */

$this->title = 'Solicitud de Ingreso';
$this->params['breadcrumbs'][] = ['label' => 'Regalumnos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;


?>
<div class="regalumno-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
