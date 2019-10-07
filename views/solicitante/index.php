<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Solicitante */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Solicitud de Ingreso - UPES';

?>
<div class="solicitante-index">

    
<h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
    
</div>
