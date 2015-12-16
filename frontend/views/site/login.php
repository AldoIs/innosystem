<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Ingresar';
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to login:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username', ['template' => '
   <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          {input}
         {label}
         {error}{hint}
        </div>
       
        </div>
   </div>']) ?>

                <?= $form->field($model, 'password', ['template' => '
   <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">lock</i>
          {input}
         {label}
         {error}{hint}
        </div>
       
        </div>
   </div>'])->passwordInput() ?>

                <?= $form->field($model, 'rememberMe')->checkbox(array('class'=>'filled-in')) ?>

                <div style="color:#999;margin:1em 0">
                    Si olvidaste tu contraseña puedes <?= Html::a('recuperar contraseña.', ['site/request-password-reset']) ?>.
                </div>

                <div class="form-group">
 <div class = "row"> <div class="col s6 center">
                                  <button class="btn waves-effect waves-light green" type="submit" name="action">Ingresar
                   <i class="material-icons right">send</i>
                 </button>
                               </div></div>                </div>

            <?php ActiveForm::end(); ?>
        </div>
        <?= yii\authclient\widgets\AuthChoice::widget([
     'baseAuthUrl' => ['site/auth']
     
]) ?>
    </div>
</div>
