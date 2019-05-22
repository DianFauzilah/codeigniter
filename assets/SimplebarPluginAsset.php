<?php
namespace themes\stackadmin\assets;

class SimplebarPluginAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@npm/simplebar/dist';
	
	public $css = [
		'simplebar.min.css',
	];

	public $js = [
		'simplebar.min.js',
	];

	public $publishOptions = [
		'forceCopy' => YII_DEBUG ? true : false,
	];
}