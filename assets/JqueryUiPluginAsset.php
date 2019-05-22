<?php
namespace themes\stackadmin\assets;

class JqueryUiPluginAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@npm/components-jqueryui';

	public $js = [
		'jquery-ui.min.js',
	];

	public $depends = [
		'themes\stackadmin\assets\ThemePluginAsset',
	];

	public $publishOptions = [
		'forceCopy' => YII_DEBUG ? true : false,
	];
}