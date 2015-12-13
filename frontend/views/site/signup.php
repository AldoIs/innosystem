<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Registro';
?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Por favor llene todos los campos correctamente:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup', 'class' => 'col s12']); ?>
               
            <?= $form->field($model, 'username',['template' => '
   <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          {input}
         {label}
         {error}{hint}
        </div>
       
        </div>
   </div>']) ?>
                
                <?= $form->field($model, 'email', ['template' => '
   <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">email</i>
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

               <div class = "row"> <div class="col s6 center">
                                  <button class="btn waves-effect waves-light green" type="submit" name="action">Registrar
                   <i class="material-icons right">send</i>
                 </button>
                               </div></div>

            <?php ActiveForm::end(); ?>
      
        </div>
    </div>
</div>
