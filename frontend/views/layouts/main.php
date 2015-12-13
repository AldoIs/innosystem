<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
       <nav class = " blue darken-1"  >
    <div class="nav-wrapper container">
      <a href="#" class="brand-logo">ENS</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="<?php  echo Url::to(['/site/index']); ?>">Inicio</a></li>
        <li><a href="<?php  echo Url::to(['/site/about']); ?>">Acerca de</a></li>
        <li><a href="<?php  echo Url::to(['/site/contact']); ?>">Contacto</a></li>
    <?php
    if (Yii::$app->user->isGuest) {
        ?>
        <li><a href="<?php  echo Url::to(['/site/signup']); ?>">Registrarse</a></li>
        <li><a href="<?php  echo Url::to(['/site/login']); ?>" class = "waves-effect waves-light green">Ingresar</a></li>        
        <?php
    } else { ?>
       
        <li><a class=" dropdown-button  waves-effect waves-light white-text" href="#" data-activates="profile-dropdown"><?= Yii::$app->user->identity->username ?><i class="mdi-navigation-arrow-drop-down right"></i></a></li>
        <ul id="profile-dropdown" class="dropdown-content center">
                            <li><a class = "center  blue-text darken-1-text" href="#"><i class="mdi-action-face-unlock"></i>Perfil</a>
                            </li>
                            <li><a href="#" class = "center  blue-text darken-1-text"><i class="mdi-action-settings"></i>Ajustes</a>
                            </li>
                            <li><a href="#" class = "center  blue-text darken-1-text"><i class="mdi-communication-live-help"></i>Ayuda</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="#" class = "center  blue-text darken-1-text"><i class="mdi-action-lock-outline"></i>Lock</a>
                            </li>
                             <li><?php echo Html::a('<i class="mdi-hardware-keyboard-tab"></i> Salir',
                        ['site/logout'],
                        ['data-method'=>'post', 'class'=>'center blue-text darken-1-text']);?></li> 
                        </ul>


    <?php       
    }
    ?>
      </ul>

    </div>
  </nav>
    <div class="container">
        <?= Alert::widget() ?>
       <main> <?= $content ?></main>
    </div>
</div>

<footer class="page-footer  blue darken-1">
     <div class="footer-copyright"> 
    <div class="container">
      <p class="pull-left white-text">&copy; Innovación Lechuga <?= date('Y') ?></p></div>

       
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>



