<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "citas".
 *
 * @property integer $idcitas
 * @property integer $idpaciente
 * @property string $fecha
 * @property string $observacion
 */
class Citas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'citas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idpaciente'], 'integer'],
            [['fecha'], 'safe'],
            [['observacion'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idcitas' => 'Idcitas',
            'idpaciente' => 'Idpaciente',
            'fecha' => 'Fecha',
            'observacion' => 'Observacion',
        ];
    }

    public function insertarCitas($idpaciente,$observacion)
    {
        $cn = Yii::$app->db;
        $cn->createCommand()->insert("citas",array("idpaciente" =>$idpaciente,
                                                     "fecha" =>  date("Y-m-s"),
                                                    "observacion"  => $observacion)

                )->execute();
    }


}
