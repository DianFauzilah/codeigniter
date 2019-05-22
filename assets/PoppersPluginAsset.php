<?php
namespace themes\stackadmin\assets;

class PoppersPluginAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@npm/popper.js/dist';

	public $js = [
		'umd/popper.min.js',
	];

	public $publishOptions = [
		'forceCopy' => YII_DEBUG ? true : false,
	];
}