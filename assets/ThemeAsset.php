<?php
namespace themes\stackadmin\assets;

class ThemeAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@themes/stackadmin';
	
	public $css = [
		'css/app.css',
		// 'css/app.rtl.min.css',
		'css/material-icons.css',
		// 'css/material-icons.rtl.css',
		'css/fontawesome.css',
		// 'css/fontawesome.rtl.css',
		'css/custom.css',
	];

	public $depends = [
		'themes\stackadmin\assets\GlyphiconsAsset',
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