<?php
namespace themes\stackadmin\assets;

class MomentPluginAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@npm/moment';

	public $js = [
		'min/moment.min.js',
	];

	public $depends = [
		'themes\stackadmin\assets\ThemePluginAsset',
	];

	public $publishOptions = [
		'forceCopy' => YII_DEBUG ? true : false,
	];
}