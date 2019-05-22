<?php
namespace themes\stackadmin\assets;

class InputMaskPluginAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@npm/jquery-mask-plugin/dist';

	public $js = [
		'jquery.mask.min.js',
	];

	public $depends = [
		'themes\stackadmin\assets\ThemePluginAsset',
	];

	public $publishOptions = [
		'forceCopy' => YII_DEBUG ? true : false,
	];
}