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

<div class="row">
	<div class="col-lg-3">
		<h1 class="h4 mb-1">Adrian Demian</h1>
		<p class="text-muted">@AdrianDemian</p>
		<p>Bootstrap 4 Admin Dashboard Themes</p>
		<div class="text-muted d-flex align-items-center">
			<i class="material-icons mr-1">location_on</i>
			<div class="flex">Dracula's Castle, Transilvania</div>
		</div>
		<div class="text-muted d-flex align-items-center">
			<i class="material-icons mr-1">link</i>
			<div class="flex"><a href="https://www.frontted.com">frontted.com</a></div>
		</div>
	</div>
	<div class="col-lg-9">
		<div class="tab-content">
			<div class="tab-pane active" id="activity">


				<div class="card">
					<div class="px-4 py-3">
						<div class="d-flex mb-1">
							<div class="avatar avatar-sm mr-3">
								<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_daniel-gaffey-1060698-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
							</div>
							<div class="flex">
								<div class="d-flex align-items-center mb-1">
									<strong class="text-15pt">Sherri J. Cardenas</strong>
									<small class="ml-2 text-muted">3 days ago</small>
								</div>
								<div>
									<p>Thanks for contributing to the release of FREE Admin Vision - PRO Admin Dashboard Theme <a href="">https://www.frontted.com/themes/admin-vision...</a> 🔥</p>
									<p><a href="">#themeforest</a> <a href="">#EnvatoMarket</a></p>
								</div>

								<div class="d-flex align-items-center">
									<a href="" class="text-muted d-flex align-items-center decoration-0"><i class="material-icons mr-1" style="font-size: inherit;">favorite_border</i> 38</a>
									<a href="" class="text-muted d-flex align-items-center decoration-0 ml-3"><i class="material-icons mr-1" style="font-size: inherit;">thumb_up</i> 71</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="card">
					<div class="px-4 py-3">
						<div class="d-flex mb-1">
							<div class="avatar avatar-sm mr-3">
								<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_rsz_1andy-lee-642320-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
							</div>
							<div class="flex">
								<div class="d-flex align-items-center mb-1">
									<strong class="text-15pt">Jenell D. Matney</strong>
									<small class="ml-2 text-muted">4 days ago</small>
								</div>
								<div>
									<p>Rails 5 Bootstrap 4 Boilerplate Admin Dashboard on <a href="">https://t.co/Wh7jE0yz4t</a> 😉
								</div>

								<a href="" class="card my-3 text-body decoration-0">
									<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/demo1.png" alt="image" class="rounded card-img-top">
									<span class="card-footer d-flex flex-column">
										<strong>Admin Dashboard Template</strong>
										<span>Made with Rails 5 and Bootstrap 4</span>
										<span class="text-muted">frontted.com</span>
									</span>
								</a>

								<div class="d-flex align-items-center">
									<a href="" class="text-muted d-flex align-items-center decoration-0"><i class="material-icons mr-1" style="font-size: inherit;">favorite_border</i> 156</a>
									<a href="" class="text-muted d-flex align-items-center decoration-0 ml-3"><i class="material-icons mr-1" style="font-size: inherit;">thumb_up</i> 351</a>
								</div>
							</div>
						</div>
					</div>
				</div>


			</div>
		</div>
	</div>
</div>