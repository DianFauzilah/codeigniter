<?php
namespace themes\stackadmin\assets;

class DragulaPluginAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@npm/dragula/dist';
	
	public $css = [
		'dragula.min.css',
	];

	public $js = [
		'dragula.min.js',
	];

	public $depends = [
		'themes\stackadmin\assets\ThemePluginAsset',
	];

	public $publishOptions = [
		'forceCopy' => YII_DEBUG ? true : false,
	];
}