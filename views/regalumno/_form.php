<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Regalumno */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="regalumno-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nombre2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nombre3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'apellido1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'apellido2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'apellido_casada')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'depto_nacimiento')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'munic_nacimiento')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fecha_nacimiento')->textInput() ?>

    <?= $form->field($model, 'nacionalidad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sexo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'estado_civil')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefono_fijo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefono_movil')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dui')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipo_discapacidad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'direc_residencia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'depto_res')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'munic_res')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'acceso_pc')->textInput() ?>

    <?= $form->field($model, 'acceso_internet')->textInput() ?>

    <?= $form->field($model, 'forma_financiamiento')->textInput() ?>

    <?= $form->field($model, 'otros_financiamientos')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_inst_sec')->textInput() ?>

    <?= $form->field($model, 'ciudad_est_sec')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'depto_est_sec')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'munic_est_sec')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipo_institucion_sec')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ano_graduacion_sec')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'titulo_obtenido_sec')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'grado_academico')->textInput() ?>

    <?= $form->field($model, 'especialidad_acad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'empresa_trabajo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefono_trabajo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'extension')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'direccion_trabajo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email_trabajo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'forma_ingreso')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_educ_sup')->textInput() ?>

    <?= $form->field($model, 'depto_est_sup')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'munic_est_sup')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipo_est_sup')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'carrera_procedencia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'num_mat_aprobadas')->textInput() ?>

    <?= $form->field($model, 'id_estudio')->textInput() ?>

    <?= $form->field($model, 'fecha_solicitud')->textInput() ?>

    <?= $form->field($model, 'usuario_adicion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fecha_adicion')->textInput() ?>

    <?= $form->field($model, 'usuario_modificacion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fecha_modificacion')->textInput() ?>

    <div class="form-group">
        <!-- Before Insertar registro ---- Create -->
        <?= Html::submitButton($model->isNewRecord ? 'Insertar registro' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
