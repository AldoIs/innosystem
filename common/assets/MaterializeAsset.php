<?php 
namespace common\assets;

use yii\web\AssetBundle;

class MaterializeAsset extends AssetBundle
{

	public $sourcePath = '@bower/materialize/dist';
    public $css = [
        'css/materialize.min.css',
        'https://fonts.googleapis.com/icon?family=Material+Icons',
    ];
    public $js = [
        'js/materialize.min.js',
        ];
} // END MaterlizeAsset class 

 