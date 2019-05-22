<?php
namespace themes\stackadmin\assets;

class IonRangeSliderPluginAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@npm/ion-rangeslider';
	
	public $css = [
		'css/ion.rangeSlider.min.css',
	];

	public $js = [
		'js/ion.rangeSlider.min.js',
	];

	public $depends = [
		'yii\web\JqueryAsset',
		'themes\stackadmin\assets\ThemePluginAsset',
	];

	public $publishOptions = [
		'forceCopy' => YII_DEBUG ? true : false,
	];
}