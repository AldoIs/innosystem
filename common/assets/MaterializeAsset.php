<?php 
namespace common\assets;

use yii\web\AssetBundle;

class MaterializeAsset extends AssetBundle
{

	public $sourcePath = '@bower/materialize/dist';
    public $css = [
        'css/materialize.min.css',
        'https://fonts.googleapis.com/icon?family=Material+Icons',
        'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css',
    ];
    public $js = [
        'js/materialize.min.js',
        ];
} // END MaterlizeAsset class 

 