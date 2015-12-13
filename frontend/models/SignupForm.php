<?php
namespace frontend\models;

use common\models\User;
use yii\base\Model;
use Yii;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'filter', 'filter' => 'trim'],
            ['username', 'required', 'message' => 'Es necesario un nombre de usuario.' ],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'Este usuario ya esta registrado.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required', 'message' => 'Es necesario un correo electronico.' ],
            ['email', 'email', 'message' => 'El correo no parece estar correcto.' ],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'Este correo ya esta asociado a otra cuenta.'],

            ['password', 'required', 'message' => 'Es necesaria una contraseña'],
            ['password', 'string', 'min' => 6 , 'tooShort' => 'La contraseña debe contener al menos 6 caracteres.' ],
        ];
    }
     public function attributeLabels()
    {
        return [
            'username' => 'Nombre de usuario',
             'email' => 'Correo electronico',
             'password' => 'Contraseña',


        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if ($this->validate()) {
            $user = new User();
            $user->username = $this->username;
            $user->email = $this->email;
            $user->setPassword($this->password);
            $user->generateAuthKey();
            if ($user->save()) {
                return $user;
            }
        }

        return null;
    }
}
