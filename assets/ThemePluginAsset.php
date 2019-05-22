<?php
namespace themes\stackadmin\assets;

class ThemePluginAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@themes/stackadmin';

	public $js = [
		'js/app-settings.js',
		'js/custom.js',
	];

	public $depends = [
		'yii\web\JqueryAsset',
		'themes\stackadmin\assets\SimplebarPluginAsset',
		'themes\stackadmin\assets\ThemeAsset',
		'themes\stackadmin\assets\PoppersPluginAsset',
		'themes\stackadmin\assets\BootstrapPluginAsset',
		'themes\stackadmin\assets\MaterialDesignKitFactoryPluginAsset',
	];

	public $publishOptions = [
		'forceCopy' => YII_DEBUG ? true : false,
		'except' => [
			'assets/',
			'components/',
			'controllers/',
			'layouts/',
			'modules/',
			'site/',
			'views/',
		],
	];
}