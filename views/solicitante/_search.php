<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Solicitantebusqueda */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="solicitante-search">

<?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_alumno') ?>

    <?= $form->field($model, 'nombre1') ?>

    <?= $form->field($model, 'nombre2') ?>

    <?= $form->field($model, 'nombre3') ?>

    <?= $form->field($model, 'apellido1') ?>

    <?php // echo $form->field($model, 'apellido2') ?>

    <?php // echo $form->field($model, 'apellido_casada') ?>

    <?php // echo $form->field($model, 'depto_nacimiento') ?>

    <?php // echo $form->field($model, 'munic_nacimiento') ?>

    <?php // echo $form->field($model, 'fecha_nacimiento') ?>

    <?php // echo $form->field($model, 'nacionalidad') ?>

    <?php // echo $form->field($model, 'sexo') ?>

    <?php // echo $form->field($model, 'estado_civil') ?>

    <?php // echo $form->field($model, 'telefono_fijo') ?>

    <?php // echo $form->field($model, 'telefono_movil') ?>

    <?php // echo $form->field($model, 'dui') ?>

    <?php // echo $form->field($model, 'tipo_discapacidad') ?>

    <?php // echo $form->field($model, 'direc_residencia') ?>

    <?php // echo $form->field($model, 'depto_res') ?>

    <?php // echo $form->field($model, 'munic_res') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'acceso_pc') ?>

    <?php // echo $form->field($model, 'acceso_internet') ?>

    <?php // echo $form->field($model, 'forma_financiamiento') ?>

    <?php // echo $form->field($model, 'otros_financiamientos') ?>

    <?php // echo $form->field($model, 'id_inst_sec') ?>

    <?php // echo $form->field($model, 'ciudad_est_sec') ?>

    <?php // echo $form->field($model, 'depto_est_sec') ?>

    <?php // echo $form->field($model, 'munic_est_sec') ?>

    <?php // echo $form->field($model, 'tipo_institucion_sec') ?>

    <?php // echo $form->field($model, 'ano_graduacion_sec') ?>

    <?php // echo $form->field($model, 'titulo_obtenido_sec') ?>

    <?php // echo $form->field($model, 'grado_academico') ?>

    <?php // echo $form->field($model, 'especialidad_acad') ?>

    <?php // echo $form->field($model, 'empresa_trabajo') ?>

    <?php // echo $form->field($model, 'telefono_trabajo') ?>

    <?php // echo $form->field($model, 'extension') ?>

    <?php // echo $form->field($model, 'direccion_trabajo') ?>

    <?php // echo $form->field($model, 'email_trabajo') ?>

    <?php // echo $form->field($model, 'forma_ingreso') ?>

    <?php // echo $form->field($model, 'id_educ_sup') ?>

    <?php // echo $form->field($model, 'depto_est_sup') ?>

    <?php // echo $form->field($model, 'munic_est_sup') ?>

    <?php // echo $form->field($model, 'tipo_est_sup') ?>

    <?php // echo $form->field($model, 'carrera_procedencia') ?>

    <?php // echo $form->field($model, 'num_mat_aprobadas') ?>

    <?php // echo $form->field($model, 'id_estudio') ?>

    <?php // echo $form->field($model, 'fecha_solicitud') ?>

    <?php // echo $form->field($model, 'usuario_adicion') ?>

    <?php // echo $form->field($model, 'fecha_adicion') ?>

    <?php // echo $form->field($model, 'usuario_modificacion') ?>

    <?php // echo $form->field($model, 'fecha_modificacion') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
