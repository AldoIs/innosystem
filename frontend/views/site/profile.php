<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model common\models\Profile */
/* @var $form ActiveForm */
?>
<?php 
$class = "";
if (!$model->id_user == Yii::$app->user->id) {
  # code...
  /*
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
 $model->nombre = "Tu nombre";
 $model->invocador = "Nombre invocador";
 $model->correo = "tu@correo.com";
 $model->id_equipo = 0;
 $model->logros = 0;
 $model->puesto = "Miembro";
 $model->puntos = "Miembro";
 $model->cumpleanos = "YYYY / mm / dd";
 $model->acercade = "Soy un nuevo miembro que busca mejorar cada dia y mostrar que el unico obstaculo es uno mismo.";
 $model->telefono = "##########";
 $model->nombre = "Tu nombre"; 
 $model->twitch = "N/A";
 $model->twitter = "N/A";
 $model->facebook = "N/A";
$class = "need-update";

?>


<?php
} 
if ($model->id_equipo == 0 ) {
  # code...
  $equipo = "N/A";
}else {
/*Consulta para el equipo*/
?>


<?php
}
 ?>
<div class = "profile ">

 <div id="profile-page-header" class="card">
                <div class="card-image waves-effect waves-block waves-light <?php echo $class ?>">
                <!-- PORTADA-->
                    <img class="activator" src="http://demo.geekslabs.com/materialize/v2.1/layout01/images/user-profile-bg.jpg" alt="user background">
                    <!-- PORTADA-->                     
                </div>
                <figure class="card-profile-image">
                    <img src="http://sk2.op.gg/images/medals/bronze_1.png" alt="profile image" class="circle z-depth-2 responsive-img activator">
                    <!--"http://demo.geekslabs.com/materialize/v2.1/layout01/images/avatar.jpg" -->
                </figure>
                <div class="card-content">
                  <div class="row">                    
                    <div class="col s3 offset-s2">                        
                        <h4 class="card-title grey-text text-darken-4"><?php echo $model->nombre ?></h4> <!-- Nombre -->
                        <p class="medium-small grey-text"><?php echo $model->invocador ?></p>             <!-- nombre de invocador -->           
                    </div>
                    <div class="col s2 center-align">
                        <h4 class="card-title grey-text text-darken-4"><?php echo $model->puesto ?></h4>  <!-- ROL -->
                        <p class="medium-small grey-text"><?php echo $equipo ?></p>    <!-- EQUIPO -->                     
                    </div>
                    <div class="col s2 center-align">
                        <h4 class="card-title grey-text text-darken-4"><?php echo $model->logros ?></h4> <!-- Logros totales -->
                        <p class="medium-small grey-text">Logros</p>  <!-- titulos de logros  -->                       
                    </div>                    
                    <div class="col s2 center-align">
                        <h4 class="card-title grey-text text-darken-4"><?php echo $model->puntos ?></h4> <!-- Puntos -->
                        <p class="medium-small grey-text">Puntos Ens</p>            <!-- Titulo de puntos -->            
                    </div>                    
                    <div class="col s1 right-align">
                      <a class="btn-floating activator waves-effect waves-light darken-2 right">
                          <i class="mdi-action-perm-identity"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="card-reveal">
                    <p>
                      <span class="card-title grey-text text-darken-4"><?php echo $model->nombre ?><i class="mdi-navigation-close right"></i></span> <!-- Nombre -->
                      <span><i class="mdi-action-perm-identity cyan-text text-darken-2"></i> <?php echo $model->invocador ?></span> <!-- Nombre invocador -->
                    </p>

                    <p><?php echo $model->acercade ?></p>  <!-- about -->
                    
                    <p><i class="mdi-action-perm-phone-msg cyan-text text-darken-2"></i> <?php echo $model->telefono ?></p> <!-- Telefono -->
                    <p><i class="mdi-communication-email cyan-text text-darken-2"></i> <?php echo $model->correo ?></p> <!-- Correo -->
                    <p><i class="mdi-social-cake cyan-text text-darken-2"></i> <?php echo $model->cumpleanos ?></p> <!-- Cumple -->
                   <!--  <p><i class="mdi-device-airplanemode-on cyan-text text-darken-2"></i> BAR - AUS</p> REDES -->
                   <a href="<?php  echo Url::to(['/site/editprofile']); ?>" class="btn-floating red right tooltipped " data-position="left" data-tooltip="Editar datos de perfil.">
              <i class="large material-icons">mode_edit</i>
            </a>
                </div>
            </div>
</div><!-- profilse -->
