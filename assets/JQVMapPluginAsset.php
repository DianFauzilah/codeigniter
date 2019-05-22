<?php
namespace themes\stackadmin\assets;

class JQVMapPluginAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@npm/jqvmap-noexploits/dist';
	
	public $css = [
		'jqvmap.css',
	];

	public $js = [
		'jquery.vmap.min.js',
		'maps/jquery.vmap.world.js',
	];

	public $depends = [
		'yii\web\JqueryAsset',
		'themes\stackadmin\assets\ThemePluginAsset',
	];

	public $publishOptions = [
		'forceCopy' => YII_DEBUG ? true : false,
	];
}