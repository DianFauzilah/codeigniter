<?php
namespace themes\stackadmin\assets;

class QuillPluginAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@npm/quill/dist';

	public $js = [
		'quill.min.js',
	];

	public $depends = [
		'themes\stackadmin\assets\ThemePluginAsset',
	];

	public $publishOptions = [
		'forceCopy' => YII_DEBUG ? true : false,
	];
}