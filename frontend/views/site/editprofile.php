<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Profile */
/* @var $form ActiveForm */
?>
<div class="formprofile">

    <?php $form = ActiveForm::begin(); ?>
	<div class="row">
       <!-- <?= $form->field($model, 'id_user') ?> -->
        <?= $form->field($model, 'nombre',['template' => '
   
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          {input}
         {label}
         {error}{hint}
        </div>
       
        ']) ?>
        <?= $form->field($model, 'correo', ['template' => '
   
        <div class="input-field col s6">
          <i class="material-icons prefix">email</i>
          {input}
         {label}
         {error}{hint}
        </div>
       
        ']) ?>
      <?= $form->field($model, 'cumpleanos', ['template' => '
   
        <div class="input-field col s6">
          <i class="material-icons prefix cumple">cake</i>
          {input}
         {label}
         {error}{hint}
        </div>
       
        ']) ?>

         <?= $form->field($model, 'telefono', ['template' => '
   
        <div class="input-field col s6">
          <i class="material-icons prefix">phone</i>
          {input}
         {label}
         {error}{hint}
        </div>
       
        ']) ?>
            <?= $form->field($model, 'invocador', ['template' => '
   
        <div class="input-field col s6">
          <i class="material-icons prefix">videogame_asset</i>
          {input}
         {label}
         {error}{hint}
        </div>
       
        ']) ?>
         <?= $form->field($model, 'facebook', ['template' => '
   
        <div class="input-field col s6">
          <i class=" fa fa-facebook-official  material-icons prefix"></i>
          {input}
         {label}
         {error}{hint}
        </div>
       
        ']) ?>
      
           <?= $form->field($model, 'twitter', ['template' => '
   
        <div class="input-field col s6">
          <i class=" fa fa-twitter-square  material-icons prefix"></i>
          {input}
         {label}
         {error}{hint}
        </div>
       
        ']) ?>
           <?= $form->field($model, 'twitch', ['template' => '
   
        <div class="input-field col s6">
          <i class=" fa fa-twitch  material-icons prefix"></i>
          {input}
         {label}
         {error}{hint}
        </div>
       
        ']) ?>
    </div>
        <div class="form-group">
             <div class = "row"> <div class="col s12 center">
                                  <button class="btn waves-effect waves-light green" type="submit" name="action">Guardar Perfil
                   <i class="material-icons right">save</i>
                 </button>
                               </div></div>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- formprofile -->
