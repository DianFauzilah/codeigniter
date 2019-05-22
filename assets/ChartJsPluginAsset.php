<?php
namespace themes\stackadmin\assets;

class ChartJsPluginAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@npm/chart.js/dist';

	public $js = [
		'Chart.min.js',
	];

	public $depends = [
		'themes\stackadmin\assets\ThemePluginAsset',
	];

	public $publishOptions = [
		'forceCopy' => YII_DEBUG ? true : false,
	];
}