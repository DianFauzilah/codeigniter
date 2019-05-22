<?php
namespace themes\stackadmin\assets;

class FlatpickrPluginAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@npm/flatpickr/dist';
	
	public $css = [
		'flatpickr.min.css',
		'themes/airbnb.css',
	];

	public $js = [
		'flatpickr.min.js',
	];

	public $depends = [
		'themes\stackadmin\assets\ThemePluginAsset',
	];

	public $publishOptions = [
		'forceCopy' => YII_DEBUG ? true : false,
	];
}