<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "profile".
 *
 * @property integer $id
 * @property integer $id_user
 * @property integer $nombre
 * @property integer $correo
 * @property string $cumpleanos
 * @property string $telefono
 * @property string $invocador
 * @property string $facebook
 * @property string $twitter
 * @property string $twitch
 */
class ProfileForm extends \yii\db\ActiveRecord
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
    public function rules()
    {
        return [
            [[ 'nombre', 'correo', 'cumpleanos', 'telefono', 'invocador', 'facebook', 'twitter', 'twitch'], 'required'],
            [[ 'correo'], 'integer'],
            [['cumpleanos'], 'safe'],
            [['nombre','telefono', 'invocador', 'facebook', 'twitter', 'twitch'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nombre' => 'Nombre en pantalla',
            'correo' => 'Correo',
            'cumpleanos' => 'Cumpleaños',
            'telefono' => 'Telefono',
            'invocador' => 'Nombre de Invocador',
            'facebook' => 'Facebook',
            'twitter' => 'Twitter',
            'twitch' => 'Twitch',
        ];
    }
    public function save() {

    }
}
