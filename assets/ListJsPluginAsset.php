<?php
namespace themes\stackadmin\assets;

class ListJsPluginAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@npm/list.js/dist';

	public $js = [
		'list.min.js',
	];

	public $depends = [
		'themes\stackadmin\assets\ThemePluginAsset',
	];

	public $publishOptions = [
		'forceCopy' => YII_DEBUG ? true : false,
	];
}