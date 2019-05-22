<?php
/**
 * @var $this app\components\View
 * @var $this themes\stackadmin\controllers\UiController
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2019 OMMU (www.ommu.co)
 * @created date 15 February 2019, 16:07 WIB
 * @link https://github.com/ommu/theme-stackadmin
 *
 */

use yii\helpers\Html;
use themes\stackadmin\assets\ThemePluginAsset;

$themeAsset = ThemePluginAsset::register($this);
$this->registerJsFile($themeAsset->baseUrl . '/demo/js/app-icons.js', ['depends' => [ThemePluginAsset::className()]]);
?>

<div id="app-icons">
	<app-icons-app></app-icons-app>
</div>