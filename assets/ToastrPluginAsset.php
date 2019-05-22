<?php
namespace themes\stackadmin\assets;

class ToastrPluginAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@npm/toastr/build';
	
	public $css = [
		'toastr.min.css',
	];

	public $js = [
		'toastr.min.js',
	];

	public $depends = [
		'yii\web\JqueryAsset',
		'themes\stackadmin\assets\ThemePluginAsset',
	];

	public $publishOptions = [
		'forceCopy' => YII_DEBUG ? true : false,
	];
}