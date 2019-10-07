<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RegalumnoBusqueda */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Solicitud de Ingreso';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="regalumno-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Solicitar Ingreso', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_alumno',
            'nombre1',
            'nombre2',
            'nombre3',
            'apellido1',
            // 'apellido2',
            // 'apellido_casada',
            // 'depto_nacimiento',
            // 'munic_nacimiento',
            // 'fecha_nacimiento',
            // 'nacionalidad',
            // 'sexo',
            // 'estado_civil',
            // 'telefono_fijo',
            // 'telefono_movil',
            // 'dui',
            // 'tipo_discapacidad',
            // 'direc_residencia',
            // 'depto_res',
            // 'munic_res',
            // 'email:email',
            // 'acceso_pc',
            // 'acceso_internet',
            // 'forma_financiamiento',
            // 'otros_financiamientos',
            // 'id_inst_sec',
            // 'ciudad_est_sec',
            // 'depto_est_sec',
            // 'munic_est_sec',
            // 'tipo_institucion_sec',
            // 'ano_graduacion_sec',
            // 'titulo_obtenido_sec',
            // 'grado_academico',
            // 'especialidad_acad',
            // 'empresa_trabajo',
            // 'telefono_trabajo',
            // 'extension',
            // 'direccion_trabajo',
            // 'email_trabajo:email',
            // 'forma_ingreso',
            // 'id_educ_sup',
            // 'depto_est_sup',
            // 'munic_est_sup',
            // 'tipo_est_sup',
            // 'carrera_procedencia',
            // 'num_mat_aprobadas',
            // 'id_estudio',
            // 'fecha_solicitud',
            // 'usuario_adicion',
            // 'fecha_adicion',
            // 'usuario_modificacion',
            // 'fecha_modificacion',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
