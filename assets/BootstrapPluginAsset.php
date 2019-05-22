<?php
namespace themes\stackadmin\assets;

class BootstrapPluginAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@npm/bootstrap/dist';

	public $js = [
		'js/bootstrap.min.js',
	];

	public $depends = [
		'yii\web\JqueryAsset',
		// 'yii\bootstrap\BootstrapAsset',
	];

	public $publishOptions = [
		'forceCopy' => YII_DEBUG ? true : false,
	];
}