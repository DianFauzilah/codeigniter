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
?>

<div class="card">
	<div class="card-header card-header-large bg-white">
		<h4 class="card-header__title">Sizing</h4>
	</div>
	<div class="card-body avatar-list">
		<p>Using Bootstrap's typical naming structure, you can create a standard avatar, or scale it up to different sizes based on what's needed.</p>

		<div class="avatar avatar-xxl">
			<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_daniel-gaffey-1060698-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
		</div>
		<div class="avatar avatar-xl">
			<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_daniel-gaffey-1060698-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
		</div>
		<div class="avatar avatar-lg">
			<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_daniel-gaffey-1060698-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
		</div>
		<div class="avatar">
			<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_daniel-gaffey-1060698-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
		</div>
		<div class="avatar avatar-sm">
			<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_daniel-gaffey-1060698-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
		</div>
		<div class="avatar avatar-xs">
			<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_daniel-gaffey-1060698-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
		</div>
	</div>
</div>
<div class="card">
	<div class="card-header card-header-large bg-white">
		<h4 class="card-header__title">Status Indicator</h4>
	</div>
	<div class="card-body avatar-list">
		<p>Add an online or offline status indicator to show user's availability.</p>

		<div class="avatar avatar-xxl avatar-offline">
			<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_luke-porter-261779-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
		</div>
		<div class="avatar avatar-xl avatar-online">
			<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_luke-porter-261779-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
		</div>
		<div class="avatar avatar-lg avatar-offline">
			<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_luke-porter-261779-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
		</div>
		<div class="avatar avatar-online">
			<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_luke-porter-261779-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
		</div>
		<div class="avatar avatar-sm avatar-offline">
			<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_luke-porter-261779-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
		</div>
		<div class="avatar avatar-xs avatar-online">
			<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_luke-porter-261779-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg">
		<div class="card">
			<div class="card-header card-header-large bg-white">
				<h4 class="card-header__title">Shape</h4>
			</div>
			<div class="card-body avatar-list">
				<p>Change the shape of an avatar with the default Bootstrap image classes.</p>

				<div class="avatar avatar-xxl">
					<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_daniel-gaffey-1060698-unsplash.jpg" alt="Avatar" class="avatar-img rounded">
				</div>
				<div class="avatar avatar-xxl">
					<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_joao-silas-636453-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
				</div>
				<div class="avatar avatar-lg">
					<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_luke-porter-261779-unsplash.jpg" alt="Avatar" class="avatar-img rounded">
				</div>
				<div class="avatar avatar-lg">
					<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_rsz_1andy-lee-642320-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
				</div>
				<div class="avatar">
					<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_s-a-r-a-h-s-h-a-r-p-764291-unsplash.jpg" alt="Avatar" class="avatar-img rounded">
				</div>
				<div class="avatar">
					<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_michael-dam-258165-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg">
		<div class="card">
			<div class="card-header card-header-large bg-white">
				<h4 class="card-header__title">Ratio</h4>
			</div>
			<div class="card-body avatar-list">
				<p>Change the proportional relationship between the width and height of an avatar to 4 by 3 with an <code>.avatar-4by3</code> modifier.</p>

				<div class="avatar avatar-xxl avatar-4by3">
					<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_jeremy-banks-798787-unsplash.jpg" alt="Avatar" class="avatar-img rounded">
				</div>
				<div class="avatar avatar-xl avatar-4by3">
					<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_rsz_1andy-lee-642320-unsplash.jpg" alt="Avatar" class="avatar-img rounded">
				</div>
				<div class="avatar avatar-lg avatar-4by3">
					<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_luke-porter-261779-unsplash.jpg" alt="Avatar" class="avatar-img rounded">
				</div>
				<div class="avatar avatar-4by3">
					<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_rsz_1andy-lee-642320-unsplash.jpg" alt="Avatar" class="avatar-img rounded">
				</div>
			</div>
		</div>
	</div>
</div>


<div class="card">
	<div class="card-header card-header-large bg-white">
		<h4 class="card-header__title">Initials</h4>
	</div>
	<div class="card-body avatar-list">
		<p>You won't always have an image for every user, so easily use initials instead.</p>

		<div class="avatar avatar-xxl">
			<span class="avatar-title rounded-circle">AD</span>
		</div>
		<div class="avatar avatar-xl">
			<span class="avatar-title rounded-circle">AD</span>
		</div>
		<div class="avatar avatar-lg">
			<span class="avatar-title rounded-circle">AD</span>
		</div>
		<div class="avatar">
			<span class="avatar-title rounded-circle">AD</span>
		</div>
		<div class="avatar avatar-sm">
			<span class="avatar-title rounded-circle">AD</span>
		</div>
		<div class="avatar avatar-xs">
			<span class="avatar-title rounded-circle">AD</span>
		</div>
	</div>
</div>
<div class="card">
	<div class="card-header card-header-large bg-white">
		<h4 class="card-header__title">Groups</h4>
	</div>
	<div class="card-body avatar-list">
		<p>Easily group avatars of any size, shape and content with a single component. Each avatar can also use an <code>&lt;a&gt;</code> to link to the corresponding profile.</p>

		<div class="avatar-group">
			<div class="avatar avatar-lg">
				<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_daniel-gaffey-1060698-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
			</div>
			<div class="avatar avatar-lg">
				<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_luke-porter-261779-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
			</div>
			<div class="avatar avatar-lg">
				<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_rsz_1andy-lee-642320-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
			</div>
			<div class="avatar avatar-lg">
				<span class="avatar-title rounded-circle">AD</span>
			</div>
		</div>

		<div class="avatar-group">
			<div class="avatar">
				<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_daniel-gaffey-1060698-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
			</div>
			<div class="avatar">
				<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_luke-porter-261779-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
			</div>
			<div class="avatar">
				<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_rsz_1andy-lee-642320-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
			</div>
			<div class="avatar">
				<span class="avatar-title rounded-circle">AD</span>
			</div>
		</div>

		<div class="avatar-group">
			<div class="avatar avatar-xs">
				<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_daniel-gaffey-1060698-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
			</div>
			<div class="avatar avatar-xs">
				<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_luke-porter-261779-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
			</div>
			<div class="avatar avatar-xs">
				<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_rsz_1andy-lee-642320-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
			</div>
			<div class="avatar avatar-xs">
				<span class="avatar-title rounded-circle">AD</span>
			</div>
		</div>

	</div>
</div>