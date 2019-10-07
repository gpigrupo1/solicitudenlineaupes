<?php

namespace app\controllers;

use Yii;
use app\models\Regalumno;
use app\models\RegalumnoBusqueda;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RegalumnoController implements the CRUD actions for Regalumno model.
 */
class RegalumnoController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Regalumno models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new RegalumnoBusqueda();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Regalumno model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Regalumno model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Regalumno();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_alumno]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Regalumno model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_alumno]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Regalumno model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Creates a new Regalumno model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */

    public function actionValidate($id)
    {

        $model = new Regalumno();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            /************************** HERE WE START ********************************/

            $id_alumno = '001';
            $nombre1 = $model['nombre1'];
            $apellido1 = $model['apellido1'];
            
            //$dsn = "regalumn";
            $dsn = "Driver={Microsoft Visual FoxPro Driver};SourceType=DBC;SourceDB=C:\dbfox\acad_upes.dbc;Exclusive=No";
            //Because is from system, we dont need it
            $usuario = "";
            $clave="";
            
            //Connect
            $cid=odbc_connect($dsn, $usuario, $clave);
            if (!$cid){
                exit("<strong>Ha ocurrido un error tratando de conectarse con el origen de datos.</strong>");
            }	
            
            /*
            // Query of SQL to the table what we need to do in "regalumno"
            $sql="INSERT INTO regalumno(id_alumno,nombre1,nombre2,nombre3,apellido1,apellido2,apellido_c,depto_naci,munic_naci,fecha_naci,nacionalid,sexo,estado_civ,telefono_f,telefono_m,dui,tipo_disca,direc_resi,depto_res,munic_res,email,acceso_pc,acceso_int,forma_fina,otros_fina,id_inst_se,ciudad_est,depto_est_,munic_est_,tipo_insti,ano_gradua,titulo_obt,grado_acad,especialid,empresa_tr,telefono_t,extension,direccion_,email_trab,forma_ingr,id_educ_su,depto_est2,munic_est2,tipo_est_s,carrera_pr,num_mat_ap,id_estudio,fecha_soli,usuario_ad,fecha_adic,usuario_mo,fecha_modi) 
            VALUES('$id_alumno','$nombre1','$nombre2','$nombre3','$apellido1','$apellido2','$apellido_casada','$depto_nacimiento','$munic_nacimiento','$fecha_nacimiento','$nacionalidad','$sexo','$estado_civil','$telefono_fijo','$telefono_movil','$dui','$tipo_discapacidad','$direc_residencia','$depto_res','$munic_res','$email','$acceso_pc','$acceso_internet','$forma_financiamiento','$otros_financiamientos','$id_inst_sec','$ciudad_est_sec','$depto_est_sec','$munic_est_sec','$tipo_institucion_sec','$ano_graduacion_sec','$titulo_obtenido_sec','$grado_academico','$especialidad_acad','$empresa_trabajo','$telefono_trabajo','$extension','$direccion_trabajo','$email_trabajo','$forma_ingreso','$id_educ_sup','$depto_est_sup','$munic_est_sup','$tipo_est_sup','$carrera_procedencia','$num_mat_aprobadas','$id_estudio','$fecha_solicitud','$usuario_adicion','$fecha_adicion','$usuario_modificacion','$fecha_modificacion')";
            */

            $sql="INSERT INTO alumnos(id_alumno,nombre1,apellido1) VALUES ('$id_alumno','$nombre1','$apellido1')";

            // generamos la tabla mediante odbc_result_all(); utilizando borde 1
            // $result=odbc_exec($cid,$sql) or die(exit("Error en odbc_exec"));
            //print odbc_result_all($result,"border=1");
            
            odbc_exec($cid,$sql);

            /************************** HERE WE END ********************************/
            return $this->redirect(['view', 'id' => $model->id_alumno]);
        }

        return $this->redirect(['index']);
    }

    /**
     * Finds the Regalumno model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Regalumno the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Regalumno::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
