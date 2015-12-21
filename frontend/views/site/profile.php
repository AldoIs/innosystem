<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Profile */
/* @var $form ActiveForm */
?>
<div class = "profile ">
 <div id="profile-page-header" class="card">
                <div class="card-image waves-effect waves-block waves-light">
                <!-- PORTADA-->
                    <img class="activator" src="http://demo.geekslabs.com/materialize/v2.1/layout01/images/user-profile-bg.jpg" alt="user background">
                    <!-- PORTADA-->                     
                </div>
                <figure class="card-profile-image">
                    <img src="http://demo.geekslabs.com/materialize/v2.1/layout01/images/avatar.jpg" alt="profile image" class="circle z-depth-2 responsive-img activator">
                </figure>
                <div class="card-content">
                  <div class="row">                    
                    <div class="col s3 offset-s2">                        
                        <h4 class="card-title grey-text text-darken-4">AldoIs</h4> <!-- Nombre -->
                        <p class="medium-small grey-text">Stinson</p>             <!-- nombres de invocador -->           
                    </div>
                    <div class="col s2 center-align">
                        <h4 class="card-title grey-text text-darken-4">Coach</h4>  <!-- ROL -->
                        <p class="medium-small grey-text">Ethernal Newbie Style (ENS)</p>    <!-- EQUIPO -->                     
                    </div>
                    <div class="col s2 center-align">
                        <h4 class="card-title grey-text text-darken-4">1</h4> <!-- Logros totales -->
                        <p class="medium-small grey-text">Logros completados.</p>  <!-- titulos de logros  -->                       
                    </div>                    
                    <div class="col s2 center-align">
                        <h4 class="card-title grey-text text-darken-4">1217</h4> <!-- Puntos -->
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
                      <span class="card-title grey-text text-darken-4">Roger Waters <i class="mdi-navigation-close right"></i></span> <!-- Nombre -->
                      <span><i class="mdi-action-perm-identity cyan-text text-darken-2"></i> Project Manager</span> <!-- Nombre invocador -->
                    </p>

                    <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>  <!-- about -->
                    
                    <p><i class="mdi-action-perm-phone-msg cyan-text text-darken-2"></i> +1 (612) 222 8989</p> <!-- Telefono -->
                    <p><i class="mdi-communication-email cyan-text text-darken-2"></i> mail@domain.com</p> <!-- Correo -->
                    <p><i class="mdi-social-cake cyan-text text-darken-2"></i> 18th June 1990</p> <!-- Cumple -->
                    <p><i class="mdi-device-airplanemode-on cyan-text text-darken-2"></i> BAR - AUS</p> <!-- REDES -->
                </div>
            </div>
</div><!-- profilse -->
