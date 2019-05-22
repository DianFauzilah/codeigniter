<?php
namespace themes\stackadmin\assets;

class FullcalendarPluginAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@npm/fullcalendar/dist';
	
	public $css = [
		'fullcalendar.min.css',
	];

	public $js = [
		'fullcalendar.min.js',
	];

	public $depends = [
		'themes\stackadmin\assets\ThemePluginAsset',
	];

	public $publishOptions = [
		'forceCopy' => YII_DEBUG ? true : false,
	];
}