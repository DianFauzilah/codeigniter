<?php
namespace themes\stackadmin\assets;

class DaterangepickerPluginAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@npm/daterangepicker';
	
	public $css = [
		'daterangepicker.css',
	];

	public $js = [
		'daterangepicker.js',
	];

	public $depends = [
		'themes\stackadmin\assets\ThemePluginAsset',
		'themes\stackadmin\assets\MomentPluginAsset',
	];

	public $publishOptions = [
		'forceCopy' => YII_DEBUG ? true : false,
	];
}