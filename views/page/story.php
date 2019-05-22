<?php
/**
 * @var $this app\components\View
 * @var $this themes\stackadmin\controllers\PageController
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2019 OMMU (www.ommu.co)
 * @created date 17 February 2019, 13:51 WIB
 * @link https://github.com/ommu/theme-stackadmin
 *
 */

use yii\helpers\Html;
use themes\stackadmin\assets\ThemePluginAsset;

$themeAsset = ThemePluginAsset::register($this);
?>

<div class="mb-3"><strong class="text-dark-gray">Popular</strong></div>
<div class="stories-cards mb-4">

	<div class="card stories-card">
		<div class="stories-card__content d-flex align-items-center flex-wrap">
			<div class="avatar avatar-lg mr-3">
				<a href=""><img src="<?php echo $themeAsset->baseUrl;?>/demo/images/stories/256_rsz_clem-onojeghuo-193397-unsplash.jpg" alt="avatar" class="avatar-img rounded"></a>
			</div>
			<div class="stories-card__title flex">
				<h5 class="card-title m-0"><a href="" class="headings-color">Cheap Romantic Vacations</a></h5>
				<small class="text-dark-gray">35 views last week</small>
			</div>
			<div class="d-flex align-items-center flex-column flex-sm-row stories-card__meta">
				<div class="mr-3 text-dark-gray text-uppercase stories-card__tag d-flex align-items-center">
					<i class="material-icons text-muted-light mr-1">folder_open</i> future
				</div>
				<div class="mr-3 text-dark-gray stories-card__date">
					<small>11 Nov, 2018 07:46 AM</small>
				</div>
				<div class="media mr-2 ml-sm-auto align-items-center">
					<div class="media-left mr-2 avatar-group">

						<div class="avatar avatar-xs">
							<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_rsz_1andy-lee-642320-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
						</div>

						<div class="avatar avatar-xs">
							<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_michael-dam-258165-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
						</div>

						<div class="avatar avatar-xs">
							<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_luke-porter-261779-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
						</div>

					</div>
					<div class="media-body">

						<a href="" class="text-body">+2 more</a>

					</div>
				</div>
			</div>
			<div class="dropdown ml-auto">
				<a href="#" data-toggle="dropdown" data-caret="false" class="text-muted"><i class="material-icons">more_vert</i></a>
				<div class="dropdown-menu dropdown-menu-right">
					<a href="javascript:void(0)" class="dropdown-item">Action</a>
					<a href="javascript:void(0)" class="dropdown-item">Other Action</a>
					<div class="dropdown-divider"></div>
					<a href="javascript:void(0)" class="dropdown-item">Some Other Action</a>
				</div>
			</div>
		</div>
	</div>

	<div class="card stories-card">
		<div class="stories-card__content d-flex align-items-center flex-wrap">
			<div class="avatar avatar-lg mr-3">
				<a href=""><img src="<?php echo $themeAsset->baseUrl;?>/demo/images/stories/256_rsz_dex-ezekiel-761373-unsplash.jpg" alt="avatar" class="avatar-img rounded"></a>
			</div>
			<div class="stories-card__title flex">
				<h5 class="card-title m-0"><a href="" class="headings-color">Copper Canyon</a></h5>
				<small class="text-dark-gray">78 views last week</small>
			</div>
			<div class="d-flex align-items-center flex-column flex-sm-row stories-card__meta">
				<div class="mr-3 text-dark-gray text-uppercase stories-card__tag d-flex align-items-center">
					<i class="material-icons text-muted-light mr-1">folder_open</i> future
				</div>
				<div class="mr-3 text-dark-gray stories-card__date">
					<small>10 Nov, 2018 08:25 AM</small>
				</div>
				<div class="media mr-2 ml-sm-auto align-items-center">
					<div class="media-left mr-2 avatar-group">

						<div class="avatar avatar-xs">
							<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_joao-silas-636453-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
						</div>

						<div class="avatar avatar-xs">
							<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_jeremy-banks-798787-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
						</div>

						<div class="avatar avatar-xs">
							<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_daniel-gaffey-1060698-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
						</div>

					</div>
					<div class="media-body">

						<a href="" class="text-body">+1 more</a>

					</div>
				</div>
			</div>
			<div class="dropdown ml-auto">
				<a href="#" data-toggle="dropdown" data-caret="false" class="text-muted"><i class="material-icons">more_vert</i></a>
				<div class="dropdown-menu dropdown-menu-right">
					<a href="javascript:void(0)" class="dropdown-item">Action</a>
					<a href="javascript:void(0)" class="dropdown-item">Other Action</a>
					<div class="dropdown-divider"></div>
					<a href="javascript:void(0)" class="dropdown-item">Some Other Action</a>
				</div>
			</div>
		</div>
	</div>

	<div class="card stories-card">
		<div class="stories-card__content d-flex align-items-center flex-wrap">
			<div class="avatar avatar-lg mr-3">
				<a href=""><img src="<?php echo $themeAsset->baseUrl;?>/demo/images/stories/256_rsz_rhema-kallianpur-275251-unsplash.jpg" alt="avatar" class="avatar-img rounded"></a>
			</div>
			<div class="stories-card__title flex">
				<h5 class="card-title m-0"><a href="" class="headings-color">Selecting The Right Hotel</a></h5>
				<small class="text-dark-gray">78 views last week</small>
			</div>
			<div class="d-flex align-items-center flex-column flex-sm-row stories-card__meta">
				<div class="mr-3 text-dark-gray text-uppercase stories-card__tag d-flex align-items-center">
					<i class="material-icons text-muted-light mr-1">folder_open</i> video
				</div>
				<div class="mr-3 text-dark-gray stories-card__date">
					<small>09 Nov, 2018 07:13 PM</small>
				</div>
				<div class="media mr-2 ml-sm-auto align-items-center">
					<div class="media-left mr-2 avatar-group">

						<div class="avatar avatar-xs">
							<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_rsz_1andy-lee-642320-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
						</div>

						<div class="avatar avatar-xs">
							<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_michael-dam-258165-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
						</div>

						<div class="avatar avatar-xs">
							<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_luke-porter-261779-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
						</div>

					</div>
					<div class="media-body">

					</div>
				</div>
			</div>
			<div class="dropdown ml-auto">
				<a href="#" data-toggle="dropdown" data-caret="false" class="text-muted"><i class="material-icons">more_vert</i></a>
				<div class="dropdown-menu dropdown-menu-right">
					<a href="javascript:void(0)" class="dropdown-item">Action</a>
					<a href="javascript:void(0)" class="dropdown-item">Other Action</a>
					<div class="dropdown-divider"></div>
					<a href="javascript:void(0)" class="dropdown-item">Some Other Action</a>
				</div>
			</div>
		</div>
	</div>

</div>



<div class="my-3"><strong class="text-dark-gray">Recent Posts</strong></div>
<div class="row">

	<div class="col-sm-6 col-md-4">
		<div class="card stories-card-popular">
			<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/stories/256_rsz_euan-carmichael-666378-unsplash.jpg" alt="" class="card-img">
			<div class="stories-card-popular__content">
				<div class="card-body d-flex align-items-center">
					<div class="avatar-group flex">
						<div class="avatar avatar-xs">
							<a href=""><img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_luke-porter-261779-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle"></a>
						</div>
					</div>
					<a style="text-decoration: none;" class="d-flex align-items-center" href=""><i class="material-icons mr-1" style="font-size: inherit;">remove_red_eye</i> <small>327</small></a>
				</div>
				<div class="stories-card-popular__title card-body">
					<small class="text-muted text-uppercase">blog</small>
					<h4 class="card-title m-0"><a href="">Tremblant In Canada</a></h4>
				</div>
			</div>
		</div>
	</div>

	<div class="col-sm-6 col-md-4">
		<div class="card stories-card-popular">
			<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/stories/256_rsz_jared-rice-388260-unsplash.jpg" alt="" class="card-img">
			<div class="stories-card-popular__content">
				<div class="card-body d-flex align-items-center">
					<div class="avatar-group flex">
						<div class="avatar avatar-xs">
							<a href=""><img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_michael-dam-258165-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle"></a>
						</div>
					</div>
					<a style="text-decoration: none;" class="d-flex align-items-center" href=""><i class="material-icons mr-1" style="font-size: inherit;">remove_red_eye</i> <small>327</small></a>
				</div>
				<div class="stories-card-popular__title card-body">
					<small class="text-muted text-uppercase">blog</small>
					<h4 class="card-title m-0"><a href="">Become A Travel Pro In One Easy Lesson</a></h4>
				</div>
			</div>
		</div>
	</div>

	<div class="col-sm-6 col-md-4">
		<div class="card stories-card-popular">
			<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/stories/256_rsz_dex-ezekiel-761373-unsplash.jpg" alt="" class="card-img">
			<div class="stories-card-popular__content">
				<div class="card-body d-flex align-items-center">
					<div class="avatar-group flex">
						<div class="avatar avatar-xs">
							<a href=""><img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_rsz_1andy-lee-642320-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle"></a>
						</div>
					</div>
					<a style="text-decoration: none;" class="d-flex align-items-center" href=""><i class="material-icons mr-1" style="font-size: inherit;">remove_red_eye</i> <small>327</small></a>
				</div>
				<div class="stories-card-popular__title card-body">
					<small class="text-muted text-uppercase">blog</small>
					<h4 class="card-title m-0"><a href="">A Guide To Rocky Mountain Vacations</a></h4>
				</div>
			</div>
		</div>
	</div>

</div>