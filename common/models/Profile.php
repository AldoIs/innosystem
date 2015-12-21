<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "profile".
 *
 * @property integer $id
 * @property integer $id_user
 * @property strin g$nombre
 * @property integer $correo
 * @property string $cumpleanos
 * @property string $telefono
 * @property string $invocador
 * @property string $facebook
 * @property string $twitter
 * @property string $twitch
 * @property int $puntos
 * @property int $logros
 * @property string $puesto
 * @property int $id_equipo
 * @property String $acercade


 */
class Profile extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'profile';
    }

    /**
     * @inheritdoc
     */


}
        