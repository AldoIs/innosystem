<?php
namespace common\models;

use Yii;
use yii\base\Model;;
use common\models\Profile;

/**
 * Signup form
 */
class ProfileForm extends Model
{
    public $id_user;
    public $nombre;
    public $correo;
    public $cumpleanos;
    public $telefono;
    public $invocador;
    public $facebook;
    public $twitter;
    public $twitch;
    public function rules()
    {
        return [
            [['nombre', 'correo', 'cumpleanos', 'telefono', 'invocador'], 'required'],
            [['correo'],'email'],
            [['cumpleanos'], 'safe'],
            [['telefono', 'invocador', 'facebook', 'twitter', 'twitch', 'nombre'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_user' => 'Id User',
            'nombre' => 'Nombre',
            'correo' => 'Correo',
            'cumpleanos' => 'Cumpleanos',
            'telefono' => 'Telefono',
            'invocador' => 'Nombre de Invocador en (LAN)',
            'facebook' => 'Facebook',
            'twitter' => 'Twitter',
            'twitch' => 'Twitch',
        ];
    }

    public function saveProfile() 
    {


        $perfil = Profile::find()->where(['id_user' => Yii::$app->user->id])->one();
        if(count($perfil)>0) {
            $profile = $perfil;
            $profile->invocador = $this->invocador;
            $profile->facebook = $this->facebook;
            $profile->twitter = $this->twitter;
            $profile->twitch = $this->twitch;
        }else {
            $profile = new Profile();
            $profile->puntos =  0;
            $profile->logros = 0;
            $profile->puesto = "Miembro";
            $profile->id_equipo = 0;
            $profile->acercade = "Soy un nuevo miembro que busca mejorar cada dia y mostrar que el unico obstaculo es uno mismo.";

        }
            if ($this->validate() ) {
            $profile->id_user = Yii::$app->user->id;
            $profile->correo = $this->correo;
            $profile->nombre = $this->nombre;
            $profile->cumpleanos =  date("Y-m-d", strtotime($this->cumpleanos));
            $profile->telefono =  $this->telefono;
            $profile->invocador = $this->invocador;
            $profile->facebook = $this->facebook;
            $profile->twitter = $this->twitter;
            $profile->twitch = $this->twitch;

            if ($profile->save()) {
                return true;
            }else {
                return false;
            }
        }
    }
}

     ?>