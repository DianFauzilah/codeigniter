<?php
namespace themes\stackadmin\assets;

class DropzonePluginAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@npm/dropzone/dist';
	
	public $css = [
		'min/dropzone.min.css',
	];

	public $js = [
		'min/dropzone.min.js',
	];

	public $depends = [
		'themes\stackadmin\assets\ThemePluginAsset',
	];

	public $publishOptions = [
		'forceCopy' => YII_DEBUG ? true : false,
	];
}