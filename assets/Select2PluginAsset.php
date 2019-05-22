<?php
namespace themes\stackadmin\assets;

class Select2PluginAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@npm/select2/dist';
	
	public $css = [
		'css/select2.min.css',
	];

	public $js = [
		'js/select2.min.js',
	];

	public $depends = [
		'themes\stackadmin\assets\ThemePluginAsset',
	];

	public $publishOptions = [
		'forceCopy' => YII_DEBUG ? true : false,
	];
}