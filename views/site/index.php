<?php
/**
 * @var $this app\components\View
 * @var $this themes\stackadmin\controllers\SiteController
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2019 OMMU (www.ommu.co)
 * @created date 20 February 2019, 15:35 WIB
 * @link https://github.com/ommu/theme-stackadmin
 *
 */

use yii\helpers\Html;
use yii\helpers\Url;
use themes\stackadmin\assets\ThemePluginAsset;

$themeAsset = ThemePluginAsset::register($this);
?>

<div class="container">
	<div class="row">
		<div class="col-lg-6">
			<div class="card">
				<div class="card-header card-header-large bg-white">
					<h4 class="card-header__title m-0">Default - <span class="text-muted">Admin System</span></h4>
				</div>
				<img src="<?php echo $themeAsset->baseUrl; ?>/demo/images/choose/demo1.png" class="img-fluid" alt="Default Admin System">
			</div>
			<a href="<?php echo Url::to(['/stackadmin-page/dashboard']);?>" target="_blank" class="btn btn-light">Live Preview</a>
			<a href="<?php echo Url::to(['/stackadmin-page/dashboard', 'dir'=>'rtl']);?>" target="_blank" class="btn btn-secondary">R-T-L</a>
			<a href="#" target="_blank" class="btn btn-danger disabled">Angular (soon)</a>
		</div>
		<div class="col-lg-6">
			<div class="card">
				<div class="card-header card-header-large bg-white">
					<h4 class="card-header__title m-0">Demo #2 - <span class="text-muted">Enterprise Dashboard</span></h4>
				</div>
				<img src="<?php echo $themeAsset->baseUrl; ?>/demo/images/choose/demo2.png" class="img-fluid" alt="Default Admin System">
			</div>
			<a href="<?php echo Url::to(['/stackadmin-page/staff', 'layout'=>'fluid']);?>" target="_blank" class="btn btn-light">Live Preview</a>
			<a href="<?php echo Url::to(['/stackadmin-page/staff', 'layout'=>'fluid', 'dir'=>'rtl']);?>" target="_blank" class="btn btn-secondary">R-T-L</a>

		</div>
	</div>

	<hr class="my-5">

	<div class="row">
		<div class="col-lg-6">
			<div class="card">
				<div class="card-header card-header-large bg-white">
					<h4 class="card-header__title m-0">Demo #3 - <span class="text-muted">Analytics Dashboard</span></h4>
				</div>
				<img src="<?php echo $themeAsset->baseUrl; ?>/demo/images/choose/demo3.png" class="img-fluid" alt="Default Admin System">
			</div>
			<a href="<?php echo Url::to(['/stackadmin-page/analytic', 'layout'=>'fluid']);?>" target="_blank" class="btn btn-light">Live Preview</a>
			<a href="<?php echo Url::to(['/stackadmin-page/analytic', 'layout'=>'fluid', 'dir'=>'rtl']);?>" target="_blank" class="btn btn-secondary">R-T-L</a>
		</div>

		<div class="col-lg-6">
			<div class="card">
				<div class="card-header card-header-large bg-white">
					<h4 class="card-header__title m-0">Demo #4 - <span class="text-muted">Projects Application</span></h4>
				</div>
				<img src="<?php echo $themeAsset->baseUrl; ?>/demo/images/choose/demo4.png" class="img-fluid" alt="Default Admin System">
			</div>
			<a href="<?php echo Url::to(['/stackadmin-app/project', 'layout'=>'fluid']);?>" target="_blank" class="btn btn-light">Live Preview</a>
			<a href="<?php echo Url::to(['/stackadmin-app/project', 'layout'=>'fluid', 'dir'=>'rtl']);?>" target="_blank" class="btn btn-secondary">R-T-L</a>
		</div>
	</div>

	<hr class="my-5">

	<div class="row">
		<div class="col-lg-6">
			<div class="card">
				<div class="card-header card-header-large bg-white">
					<h4 class="card-header__title m-0">Demo #5 - <span class="text-muted">Trello Application</span></h4>
				</div>
				<img src="<?php echo $themeAsset->baseUrl; ?>/demo/images/choose/demo5.png" class="img-fluid" alt="Default Admin System">
			</div>
			<a href="<?php echo Url::to(['/stackadmin-app/trello']);?>" target="_blank" class="btn btn-light">Live Preview</a>
			<a href="<?php echo Url::to(['/stackadmin-app/trello', 'dir'=>'rtl']);?>" target="_blank" class="btn btn-secondary">R-T-L</a>
		</div>
		<div class="col-lg-6">
			<div class="card">
				<div class="card-header card-header-large bg-white">
					<h4 class="card-header__title m-0">Demo #6 - <span class="text-muted">Chat App</span></h4>
				</div>
				<img src="<?php echo $themeAsset->baseUrl; ?>/demo/images/choose/demo6.png" class="img-fluid" alt="Default Admin System">
			</div>
			<a href="<?php echo Url::to(['/stackadmin-app/chat', 'layout'=>'fluid']);?>" target="_blank" class="btn btn-light">Live Preview</a>
			<a href="<?php echo Url::to(['/stackadmin-app/chat', 'layout'=>'fluid', 'dir'=>'rtl']);?>" target="_blank" class="btn btn-secondary">R-T-L</a>
		</div>
	</div>
	<hr class="my-5">
	<div class="row">
		<div class="col-lg-6">
			<div class="card">
				<div class="card-header card-header-large bg-white">
					<h4 class="card-header__title m-0">Demo #7 - <span class="text-muted">Stories System</span></h4>
				</div>
				<img src="<?php echo $themeAsset->baseUrl; ?>/demo/images/choose/demo7.png" class="img-fluid" alt="Default Admin System">
			</div>
			<a href="<?php echo Url::to(['/stackadmin-page/story']);?>" target="_blank" class="btn btn-light">Live Preview</a>
			<a href="<?php echo Url::to(['/stackadmin-page/story', 'dir'=>'rtl']);?>" target="_blank" class="btn btn-secondary">R-T-L</a>
		</div>
		<div class="col-lg-6">
			<div class="card">
				<div class="card-header card-header-large bg-white">
					<h4 class="card-header__title m-0">Demo #8 - <span class="text-muted">Calendar Application</span></h4>
				</div>
				<img src="<?php echo $themeAsset->baseUrl; ?>/demo/images/choose/demo8.png" class="img-fluid" alt="Default Admin System">
			</div>
			<a href="<?php echo Url::to(['/stackadmin-app/fullcalendar']);?>" target="_blank" class="btn btn-light">Live Preview</a>
			<a href="<?php echo Url::to(['/stackadmin-app/fullcalendar', 'dir'=>'rtl']);?>" target="_blank" class="btn btn-secondary">R-T-L</a>
		</div>
	</div>
</div>