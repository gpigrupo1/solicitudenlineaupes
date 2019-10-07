<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "regalumno".
 *
 * @property integer $id_alumno
 * @property string $nombre1
 * @property string $nombre2
 * @property string $nombre3
 * @property string $apellido1
 * @property string $apellido2
 * @property string $apellido_casada
 * @property string $depto_nacimiento
 * @property string $munic_nacimiento
 * @property string $fecha_nacimiento
 * @property string $nacionalidad
 * @property string $sexo
 * @property string $estado_civil
 * @property string $telefono_fijo
 * @property string $telefono_movil
 * @property string $dui
 * @property string $tipo_discapacidad
 * @property string $direc_residencia
 * @property string $depto_res
 * @property string $munic_res
 * @property string $email
 * @property integer $acceso_pc
 * @property integer $acceso_internet
 * @property integer $forma_financiamiento
 * @property string $otros_financiamientos
 * @property integer $id_inst_sec
 * @property string $ciudad_est_sec
 * @property string $depto_est_sec
 * @property string $munic_est_sec
 * @property string $tipo_institucion_sec
 * @property string $ano_graduacion_sec
 * @property string $titulo_obtenido_sec
 * @property integer $grado_academico
 * @property string $especialidad_acad
 * @property string $empresa_trabajo
 * @property string $telefono_trabajo
 * @property string $extension
 * @property string $direccion_trabajo
 * @property string $email_trabajo
 * @property string $forma_ingreso
 * @property integer $id_educ_sup
 * @property string $depto_est_sup
 * @property string $munic_est_sup
 * @property string $tipo_est_sup
 * @property string $carrera_procedencia
 * @property integer $num_mat_aprobadas
 * @property integer $id_estudio
 * @property string $fecha_solicitud
 * @property string $usuario_adicion
 * @property string $fecha_adicion
 * @property string $usuario_modificacion
 * @property string $fecha_modificacion
 */
class Solicitante extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'regalumno';
    }

    /**
     * @inheritdoc
     */
    
    public function rules()
    {
        return [
            [['nombre1', 'apellido1'], 'required'],
            [['fecha_nacimiento', 'fecha_solicitud', 'fecha_adicion', 'fecha_modificacion'], 'safe'],
            [['acceso_pc', 'acceso_internet', 'forma_financiamiento', 'id_inst_sec', 'grado_academico', 'id_educ_sup', 'num_mat_aprobadas', 'id_estudio'], 'integer'],
            [['nombre1', 'nombre2', 'nombre3', 'apellido1', 'apellido2', 'apellido_casada'], 'string', 'max' => 150],
            [['depto_nacimiento', 'munic_nacimiento', 'tipo_discapacidad', 'depto_res', 'munic_res', 'depto_est_sec', 'munic_est_sec', 'forma_ingreso', 'depto_est_sup', 'munic_est_sup'], 'string', 'max' => 2],
            [['nacionalidad', 'especialidad_acad'], 'string', 'max' => 3],
            [['sexo', 'estado_civil', 'tipo_institucion_sec', 'tipo_est_sup'], 'string', 'max' => 1],
            [['telefono_fijo', 'telefono_movil', 'telefono_trabajo'], 'string', 'max' => 15],
            [['dui'], 'string', 'max' => 9],
            [['direc_residencia', 'titulo_obtenido_sec', 'empresa_trabajo', 'direccion_trabajo', 'carrera_procedencia'], 'string', 'max' => 500],
            [['email', 'email_trabajo'], 'string', 'max' => 50],
            [['otros_financiamientos'], 'string', 'max' => 200],
            [['ciudad_est_sec'], 'string', 'max' => 10],
            [['ano_graduacion_sec', 'extension'], 'string', 'max' => 4],
            [['usuario_adicion', 'usuario_modificacion'], 'string', 'max' => 30],
        ];
    }
    

    /**
     * @inheritdoc
     */
    
    public function attributeLabels()
    {
        return [
            'id_alumno' => 'Id Alumno',
            'nombre1' => 'Nombre1',
            'nombre2' => 'Nombre2',
            'nombre3' => 'Nombre3',
            'apellido1' => 'Apellido1',
            'apellido2' => 'Apellido2',
            'apellido_casada' => 'Apellido Casada',
            'depto_nacimiento' => 'Depto Nacimiento',
            'munic_nacimiento' => 'Munic Nacimiento',
            'fecha_nacimiento' => 'Fecha Nacimiento',
            'nacionalidad' => 'Nacionalidad',
            'sexo' => 'Sexo',
            'estado_civil' => 'Estado Civil',
            'telefono_fijo' => 'Telefono Fijo',
            'telefono_movil' => 'Telefono Movil',
            'dui' => 'Dui',
            'tipo_discapacidad' => 'Tipo Discapacidad',
            'direc_residencia' => 'Direc Residencia',
            'depto_res' => 'Depto Res',
            'munic_res' => 'Munic Res',
            'email' => 'Email',
            'acceso_pc' => 'Acceso Pc',
            'acceso_internet' => 'Acceso Internet',
            'forma_financiamiento' => 'Forma Financiamiento',
            'otros_financiamientos' => 'Otros Financiamientos',
            'id_inst_sec' => 'Id Inst Sec',
            'ciudad_est_sec' => 'Ciudad Est Sec',
            'depto_est_sec' => 'Depto Est Sec',
            'munic_est_sec' => 'Munic Est Sec',
            'tipo_institucion_sec' => 'Tipo Institucion Sec',
            'ano_graduacion_sec' => 'Ano Graduacion Sec',
            'titulo_obtenido_sec' => 'Titulo Obtenido Sec',
            'grado_academico' => 'Grado Academico',
            'especialidad_acad' => 'Especialidad Acad',
            'empresa_trabajo' => 'Empresa Trabajo',
            'telefono_trabajo' => 'Telefono Trabajo',
            'extension' => 'Extension',
            'direccion_trabajo' => 'Direccion Trabajo',
            'email_trabajo' => 'Email Trabajo',
            'forma_ingreso' => 'Forma Ingreso',
            'id_educ_sup' => 'Id Educ Sup',
            'depto_est_sup' => 'Depto Est Sup',
            'munic_est_sup' => 'Munic Est Sup',
            'tipo_est_sup' => 'Tipo Est Sup',
            'carrera_procedencia' => 'Carrera Procedencia',
            'num_mat_aprobadas' => 'Num Mat Aprobadas',
            'id_estudio' => 'Id Estudio',
            'fecha_solicitud' => 'Fecha Solicitud',
            'usuario_adicion' => 'Usuario Adicion',
            'fecha_adicion' => 'Fecha Adicion',
            'usuario_modificacion' => 'Usuario Modificacion',
            'fecha_modificacion' => 'Fecha Modificacion',
        ];
    }

    /*
    public function getPacientes(){
        $cn = Yii::$app->db;
        $sql= "select * from paciente";

        return $cn->createCommand($sql)->queryAll();

    }
    */
}
