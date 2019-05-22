<?php
/**
 * @var $this app\components\View
 * @var $this themes\stackadmin\controllers\AppController
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2019 OMMU (www.ommu.co)
 * @created date 17 February 2019, 20:54 WIB
 * @link https://github.com/ommu/theme-stackadmin
 *
 */

use yii\helpers\Html;
use themes\stackadmin\assets\ThemePluginAsset;

$themeAsset = ThemePluginAsset::register($this);
\themes\stackadmin\assets\FlatpickrPluginAsset::register($this);
$this->registerCssFile($themeAsset->baseUrl . '/demo/css/flatpickr.css', ['depends' => [ThemePluginAsset::className()]]);
$this->registerCssFile($themeAsset->baseUrl . '/demo/css/flatpickr.rtl.css', ['depends' => [ThemePluginAsset::className()]]);
$this->registerCssFile($themeAsset->baseUrl . '/demo/css/flatpickr-airbnb.css', ['depends' => [ThemePluginAsset::className()]]);
$this->registerCssFile($themeAsset->baseUrl . '/demo/css/flatpickr-airbnb.rtl.css', ['depends' => [ThemePluginAsset::className()]]);
$this->registerJsFile($themeAsset->baseUrl . '/demo/js/flatpickr.js', ['depends' => [ThemePluginAsset::className()]]);
?>

<div class="card card-form d-flex flex-column flex-sm-row">
	<div class="card-form__body card-body-form-group flex">
		<div class="row">
			<div class="col-sm-auto">
				<div class="form-group">
					<label for="filter_name">Search</label>
					<input id="filter_name" type="text" class="form-control" placeholder="Enter keyword">
				</div>
			</div>
			<div class="col-sm-auto">
				<div class="form-group">
					<label for="filter_buckets">Buckets</label><br>
					<select id="filter_buckets" class="custom-select" style="width: 150px;">
						<option value="all">Any</option>
						<option value="1">Deployed</option>
						<option value="2">Concept</option>
						<option value="3">Wireframe</option>
					</select>
				</div>
			</div>
			<div class="col-sm-auto">
				<div class="form-group">
					<label for="filter_assigned">Assigned To</label><br>
					<select id="filter_assigned" class="custom-select" style="width: 150px;">
						<option value="all">Any</option>
						<option value="1">Adrian D.</option>
						<option value="2">Michael S.</option>
						<option value="3">John L.</option>
					</select>
				</div>
			</div>
			<div class="col-sm-auto">
				<div class="form-group" style="width: 200px;">
					<label for="filter_date">Daterange</label>
					<input id="filter_date" type="text" class="form-control" placeholder="Select date ..." value="13/03/2018 to 20/03/2018" data-toggle="flatpickr" data-flatpickr-mode="range" data-flatpickr-alt-format="d/m/Y" data-flatpickr-date-format="d/m/Y">
				</div>
			</div>
		</div>
	</div>
	<button class="btn bg-white border-left border-top border-top-sm-0 rounded-top-0 rounded-top-sm rounded-left-sm-0"><i class="material-icons text-primary">refresh</i></button>
</div>


<p class="text-dark-gray d-flex align-items-center mt-3">
	<i class="material-icons icon-muted mr-2">event</i>
	<strong>Wednesday, 24 Oct</strong>
</p>





<div class="row align-items-center projects-item mb-1">
	<div class="col-sm-auto mb-1 mb-sm-0">
		<div class="text-dark-gray">12:30 PM</div>
	</div>
	<div class="col-sm">
		<div class="card m-0">
			<div class="px-4 py-3">
				<div class="row align-items-center">
					<div class="col" style="min-width: 300px">
						<div class="d-flex align-items-center">
							<a href="#" class="text-body"><strong class="text-15pt mr-2">#4813 - Fix email alignment on iPhone 7</strong></a>
							<span class="badge badge-light-gray">NEW</span>
						</div>
						<div class="d-flex align-items-center">
							<small class="text-dark-gray mr-2">Assigned to</small>
							<a href="#" class="d-flex align-items-middle">
								<span class="avatar avatar-xxs avatar-online mr-2">
									<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_daniel-gaffey-1060698-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
								</span>
								Sherri Cardenas
							</a>
						</div>
					</div>
					<div class="col-auto d-flex align-items-center">
						<i class="material-icons icon-muted icon-20pt mr-2">account_circle</i>
						<a href="#" class="text-body">Michael S.</a>
					</div>
					<div class="col-auto d-flex align-items-center" style="min-width: 140px;">
						<a href="#" class="text-dark-gray">DEPLOYED</a>
						<i class="material-icons icon-muted icon-20pt ml-2">folder</i>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



<div class="row align-items-center projects-item mb-1">
	<div class="col-sm-auto mb-1 mb-sm-0">
		<div class="text-dark-gray">07:48 PM</div>
	</div>
	<div class="col-sm">
		<div class="card m-0">
			<div class="px-4 py-3">
				<div class="row align-items-center">
					<div class="col" style="min-width: 300px">
						<div class="d-flex align-items-center">
							<a href="#" class="text-body"><strong class="text-15pt mr-2">#4813 - Create account profile page</strong></a>
							<span class="badge badge-success">RESOLVED</span>
						</div>
						<div class="d-flex align-items-center">
							<small class="text-dark-gray mr-2">Assigned to</small>
							<a href="#" class="d-flex align-items-middle">
								<span class="avatar avatar-xxs avatar-online mr-2">
									<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_rsz_1andy-lee-642320-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
								</span>
								Jenell Matney
							</a>
						</div>
					</div>
					<div class="col-auto d-flex align-items-center">
						<i class="material-icons icon-muted icon-20pt mr-2">account_circle</i>
						<a href="#" class="text-body">Adrian D.</a>
					</div>
					<div class="col-auto d-flex align-items-center" style="min-width: 140px;">
						<a href="#" class="text-dark-gray">CONCEPT</a>
						<i class="material-icons icon-muted icon-20pt ml-2">folder</i>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



<div class="row align-items-center projects-item mb-1">
	<div class="col-sm-auto mb-1 mb-sm-0">
		<div class="text-dark-gray">03:13 PM</div>
	</div>
	<div class="col-sm">
		<div class="card m-0">
			<div class="px-4 py-3">
				<div class="row align-items-center">
					<div class="col" style="min-width: 300px">
						<div class="d-flex align-items-center">
							<a href="#" class="text-body"><strong class="text-15pt mr-2">#4811 - Design new Dashboard</strong></a>
							<span class="badge badge-warning">PRO</span>
						</div>
						<div class="d-flex align-items-center">
							<small class="text-dark-gray mr-2">Assigned to</small>
							<a href="#" class="d-flex align-items-middle">
								<span class="avatar avatar-xxs avatar-online mr-2">
									<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_jeremy-banks-798787-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
								</span>
								Joseph Ferland
							</a>
						</div>
					</div>
					<div class="col-auto d-flex align-items-center">
						<i class="material-icons icon-muted icon-20pt mr-2">account_circle</i>
						<a href="#" class="text-body">John L.</a>
					</div>
					<div class="col-auto d-flex align-items-center" style="min-width: 140px;">
						<a href="#" class="text-dark-gray">WIREFRAME</a>
						<i class="material-icons icon-muted icon-20pt ml-2">folder</i>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



<div class="row align-items-center projects-item mb-1">
	<div class="col-sm-auto mb-1 mb-sm-0">
		<div class="text-dark-gray">12:30 PM</div>
	</div>
	<div class="col-sm">
		<div class="card m-0">
			<div class="px-4 py-3">
				<div class="row align-items-center">
					<div class="col" style="min-width: 300px">
						<div class="d-flex align-items-center">
							<a href="#" class="text-body"><strong class="text-15pt mr-2">#4901 - Design Pricing Table</strong></a>
							<span class="badge badge-light-gray">NEW</span>
						</div>
						<div class="d-flex align-items-center">
							<small class="text-dark-gray mr-2">Assigned to</small>
							<a href="#" class="d-flex align-items-middle">
								<span class="avatar avatar-xxs avatar-online mr-2">
									<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_joao-silas-636453-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
								</span>
								Bryan Davis
							</a>
						</div>
					</div>
					<div class="col-auto d-flex align-items-center">
						<i class="material-icons icon-muted icon-20pt mr-2">account_circle</i>
						<a href="#" class="text-body">Michael S.</a>
					</div>
					<div class="col-auto d-flex align-items-center" style="min-width: 140px;">
						<a href="#" class="text-dark-gray">DEPLOYED</a>
						<i class="material-icons icon-muted icon-20pt ml-2">folder</i>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



<p class="text-dark-gray d-flex align-items-center mt-3">
	<i class="material-icons icon-muted mr-2">event</i>
	<strong>Tuesday, 23 Oct</strong>
</p>





<div class="row align-items-center projects-item mb-1">
	<div class="col-sm-auto mb-1 mb-sm-0">
		<div class="text-dark-gray">07:48 PM</div>
	</div>
	<div class="col-sm">
		<div class="card m-0">
			<div class="px-4 py-3">
				<div class="row align-items-center">
					<div class="col" style="min-width: 300px">
						<div class="d-flex align-items-center">
							<a href="#" class="text-body"><strong class="text-15pt mr-2">#4923 - Fix spacings on Stories page</strong></a>
							<span class="badge badge-success">RESOLVED</span>
						</div>
						<div class="d-flex align-items-center">
							<small class="text-dark-gray mr-2">Assigned to</small>
							<a href="#" class="d-flex align-items-middle">
								<span class="avatar avatar-xxs avatar-online mr-2">
									<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_luke-porter-261779-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
								</span>
								Elizabeth Ohara
							</a>
						</div>
					</div>
					<div class="col-auto d-flex align-items-center">
						<i class="material-icons icon-muted icon-20pt mr-2">account_circle</i>
						<a href="#" class="text-body">Adrian D.</a>
					</div>
					<div class="col-auto d-flex align-items-center" style="min-width: 140px;">
						<a href="#" class="text-dark-gray">CONCEPT</a>
						<i class="material-icons icon-muted icon-20pt ml-2">folder</i>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



<div class="row align-items-center projects-item mb-1">
	<div class="col-sm-auto mb-1 mb-sm-0">
		<div class="text-dark-gray">03:13 PM</div>
	</div>
	<div class="col-sm">
		<div class="card m-0">
			<div class="px-4 py-3">
				<div class="row align-items-center">
					<div class="col" style="min-width: 300px">
						<div class="d-flex align-items-center">
							<a href="#" class="text-body"><strong class="text-15pt mr-2">#4813 - Fix email alignment on iPhone 7</strong></a>
							<span class="badge badge-light-gray">NEW</span>
						</div>
						<div class="d-flex align-items-center">
							<small class="text-dark-gray mr-2">Assigned to</small>
							<a href="#" class="d-flex align-items-middle">
								<span class="avatar avatar-xxs avatar-online mr-2">
									<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_michael-dam-258165-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
								</span>
								Kaci Langston
							</a>
						</div>
					</div>
					<div class="col-auto d-flex align-items-center">
						<i class="material-icons icon-muted icon-20pt mr-2">account_circle</i>
						<a href="#" class="text-body">John L.</a>
					</div>
					<div class="col-auto d-flex align-items-center" style="min-width: 140px;">
						<a href="#" class="text-dark-gray">WIREFRAME</a>
						<i class="material-icons icon-muted icon-20pt ml-2">folder</i>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



<div class="mt-4">


	<ul class="pagination justify-content-center ">

		<li class="page-item disabled">
			<a class="page-link" href="#" aria-label="Previous">
				<span aria-hidden="true" class="material-icons">first_page</span>
				<span class="sr-only">First</span>
			</a>
		</li>


		<li class="page-item disabled">
			<a class="page-link" href="#" aria-label="Previous">
				<span aria-hidden="true" class="material-icons">chevron_left</span>
				<span class="sr-only">Prev</span>
			</a>
		</li>


		<li class="page-item active">
			<a class="page-link" href="#" aria-label="1">
				<span>1</span>
			</a>
		</li>

		<li class="page-item">
			<a class="page-link" href="#" aria-label="2">
				<span>2</span>
			</a>
		</li>

		<li class="page-item">
			<a class="page-link" href="#" aria-label="3">
				<span>3</span>
			</a>
		</li>

		<li class="page-item">
			<a class="page-link" href="#" aria-label="4">
				<span>4</span>
			</a>
		</li>


		<li class="page-item">
			<a class="page-link" href="#" aria-label="Next">
				<span class="sr-only">Next</span>
				<span aria-hidden="true" class="material-icons">chevron_right</span>
			</a>
		</li>


		<li class="page-item">
			<a class="page-link" href="#" aria-label="Next">
				<span class="sr-only">Last</span>
				<span aria-hidden="true" class="material-icons">last_page</span>
			</a>
		</li>

	</ul>

</div>