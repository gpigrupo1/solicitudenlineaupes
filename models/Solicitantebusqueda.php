<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Solicitante;

/**
 * Pacientebusqueda represents the model behind the search form about `app\models\Paciente`.
 */
class Solicitantebusqueda extends Solicitante
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_alumno', 'acceso_pc', 'acceso_internet', 'forma_financiamiento', 'id_inst_sec', 'grado_academico', 'id_educ_sup', 'num_mat_aprobadas', 'id_estudio'], 'integer'],
            [['nombre1', 'nombre2', 'nombre3', 'apellido1', 'apellido2', 'apellido_casada', 'depto_nacimiento', 'munic_nacimiento', 'fecha_nacimiento', 'nacionalidad', 'sexo', 'estado_civil', 'telefono_fijo', 'telefono_movil', 'dui', 'tipo_discapacidad', 'direc_residencia', 'depto_res', 'munic_res', 'email', 'otros_financiamientos', 'ciudad_est_sec', 'depto_est_sec', 'munic_est_sec', 'tipo_institucion_sec', 'ano_graduacion_sec', 'titulo_obtenido_sec', 'especialidad_acad', 'empresa_trabajo', 'telefono_trabajo', 'extension', 'direccion_trabajo', 'email_trabajo', 'forma_ingreso', 'depto_est_sup', 'munic_est_sup', 'tipo_est_sup', 'carrera_procedencia', 'fecha_solicitud', 'usuario_adicion', 'fecha_adicion', 'usuario_modificacion', 'fecha_modificacion'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
        
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {

        $query = Solicitante::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_alumno' => $this->id_alumno,
            'fecha_nacimiento' => $this->fecha_nacimiento,
            'acceso_pc' => $this->acceso_pc,
            'acceso_internet' => $this->acceso_internet,
            'forma_financiamiento' => $this->forma_financiamiento,
            'id_inst_sec' => $this->id_inst_sec,
            'grado_academico' => $this->grado_academico,
            'id_educ_sup' => $this->id_educ_sup,
            'num_mat_aprobadas' => $this->num_mat_aprobadas,
            'id_estudio' => $this->id_estudio,
            'fecha_solicitud' => $this->fecha_solicitud,
            'fecha_adicion' => $this->fecha_adicion,
            'fecha_modificacion' => $this->fecha_modificacion,
        ]);

        $query->andFilterWhere(['like', 'nombre1', $this->nombre1])
            ->andFilterWhere(['like', 'nombre2', $this->nombre2])
            ->andFilterWhere(['like', 'nombre3', $this->nombre3])
            ->andFilterWhere(['like', 'apellido1', $this->apellido1])
            ->andFilterWhere(['like', 'apellido2', $this->apellido2])
            ->andFilterWhere(['like', 'apellido_casada', $this->apellido_casada])
            ->andFilterWhere(['like', 'depto_nacimiento', $this->depto_nacimiento])
            ->andFilterWhere(['like', 'munic_nacimiento', $this->munic_nacimiento])
            ->andFilterWhere(['like', 'nacionalidad', $this->nacionalidad])
            ->andFilterWhere(['like', 'sexo', $this->sexo])
            ->andFilterWhere(['like', 'estado_civil', $this->estado_civil])
            ->andFilterWhere(['like', 'telefono_fijo', $this->telefono_fijo])
            ->andFilterWhere(['like', 'telefono_movil', $this->telefono_movil])
            ->andFilterWhere(['like', 'dui', $this->dui])
            ->andFilterWhere(['like', 'tipo_discapacidad', $this->tipo_discapacidad])
            ->andFilterWhere(['like', 'direc_residencia', $this->direc_residencia])
            ->andFilterWhere(['like', 'depto_res', $this->depto_res])
            ->andFilterWhere(['like', 'munic_res', $this->munic_res])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'otros_financiamientos', $this->otros_financiamientos])
            ->andFilterWhere(['like', 'ciudad_est_sec', $this->ciudad_est_sec])
            ->andFilterWhere(['like', 'depto_est_sec', $this->depto_est_sec])
            ->andFilterWhere(['like', 'munic_est_sec', $this->munic_est_sec])
            ->andFilterWhere(['like', 'tipo_institucion_sec', $this->tipo_institucion_sec])
            ->andFilterWhere(['like', 'ano_graduacion_sec', $this->ano_graduacion_sec])
            ->andFilterWhere(['like', 'titulo_obtenido_sec', $this->titulo_obtenido_sec])
            ->andFilterWhere(['like', 'especialidad_acad', $this->especialidad_acad])
            ->andFilterWhere(['like', 'empresa_trabajo', $this->empresa_trabajo])
            ->andFilterWhere(['like', 'telefono_trabajo', $this->telefono_trabajo])
            ->andFilterWhere(['like', 'extension', $this->extension])
            ->andFilterWhere(['like', 'direccion_trabajo', $this->direccion_trabajo])
            ->andFilterWhere(['like', 'email_trabajo', $this->email_trabajo])
            ->andFilterWhere(['like', 'forma_ingreso', $this->forma_ingreso])
            ->andFilterWhere(['like', 'depto_est_sup', $this->depto_est_sup])
            ->andFilterWhere(['like', 'munic_est_sup', $this->munic_est_sup])
            ->andFilterWhere(['like', 'tipo_est_sup', $this->tipo_est_sup])
            ->andFilterWhere(['like', 'carrera_procedencia', $this->carrera_procedencia])
            ->andFilterWhere(['like', 'usuario_adicion', $this->usuario_adicion])
            ->andFilterWhere(['like', 'usuario_modificacion', $this->usuario_modificacion]);

        return $dataProvider;
    }
}
