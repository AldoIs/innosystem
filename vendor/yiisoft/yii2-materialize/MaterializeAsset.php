<?php 
namespace yii\materialize;
use yii\web\AssetBundle;

class MaterlizeAsset extends AssetBundle
{

	public $sourcePath = '@bower/materialize/dist';
    public $css = [
        'css/materialize.min.css',
    ];
    public $js = [
        'js/materialize.min.js',
        ];
} // END MaterlizeAsset class 

 ?>