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
?>

<div class="col-lg-8 py-3 d-flex flex-column h-100">
	<div class="search-form form-control-rounded search-form--light">
		<input type="text" class="form-control" placeholder="Search messages" id="searchSample02">
		<button class="btn" type="button" role="button"><i class="material-icons">search</i></button>
	</div>

	<div class="flex p-3 d-flex flex-column">
		<div data-simplebar class="h-100">
			<div class="media border-bottom py-3">
				<a href="#" class="avatar avatar-sm mr-3">
					<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_rsz_1andy-lee-642320-unsplash.jpg" class="avatar-img rounded-circle" alt="avatar">
				</a>
				<div class="media-body">
					<div class="d-flex align-items-center">
						<div class="flex">
							<a href="#" class="text-body bold">Jenell D. Matney</a>
						</div>
						<small class="text-muted">4 days ago</small>
					</div>
					<div>Hey guys, just kicking things off here in the chat window. Hope you&#39;re all ready to tackle this great project. Let&#39;s smash some Brand Concept &amp; Design!</div>
				</div>
			</div>
			<div class="media border-bottom py-3">
				<a href="#" class="avatar avatar-sm mr-3">
					<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_daniel-gaffey-1060698-unsplash.jpg" class="avatar-img rounded-circle" alt="avatar">
				</a>
				<div class="media-body">
					<div class="d-flex align-items-center">
						<div class="flex">
							<a href="#" class="text-body bold">Sherri J. Cardenas</a>
						</div>
						<small class="text-muted">3 days ago</small>
					</div>
					<div>Nice one @Claire, we&#39;ve got some killer ideas kicking about already.</div>
					<a href="" class="avatar avatar-xxl avatar-4by3 mt-2">
						<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/stories/256_rsz_dex-ezekiel-761373-unsplash.jpg" alt="image" class="avatar-img rounded">
					</a>
				</div>
			</div>
			<div class="media border-bottom py-3">
				<a href="#" class="avatar avatar-sm mr-3">
					<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_jeremy-banks-798787-unsplash.jpg" class="avatar-img rounded-circle" alt="avatar">
				</a>
				<div class="media-body">
					<div class="d-flex align-items-center">
						<div class="flex">
							<a href="#" class="text-body bold">Joseph S. Ferland</a>
						</div>
						<small class="text-muted">2 days ago</small>
					</div>
					<div>Roger that boss! @Ravi and I have already started gathering some stuff for the mood boards, excited to start! 🔥</div>
				</div>
			</div>
			<div class="media border-bottom py-3">
				<a href="#" class="avatar avatar-sm mr-3">
					<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_joao-silas-636453-unsplash.jpg" class="avatar-img rounded-circle" alt="avatar">
				</a>
				<div class="media-body">
					<div class="d-flex align-items-center">
						<div class="flex">
							<a href="#" class="text-body bold">Bryan K. Davis</a>
						</div>
						<small class="text-muted">1 day ago</small>
					</div>
					<div>😉</div>
				</div>
			</div>
			<div class="media border-bottom py-3">
				<a href="#" class="avatar avatar-sm mr-3">
					<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_luke-porter-261779-unsplash.jpg" class="avatar-img rounded-circle" alt="avatar">
				</a>
				<div class="media-body">
					<div class="d-flex align-items-center">
						<div class="flex">
							<a href="#" class="text-body bold">Elizabeth J. Ohara</a>
						</div>
						<small class="text-muted">4 hours ago</small>
					</div>
					<div>Can&#39;t wait! @David how are we coming along with the Client Objective Meeting?</div>
				</div>
			</div>
			<div class="media py-3">
				<a href="#" class="avatar avatar-sm mr-3">
					<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_michael-dam-258165-unsplash.jpg" class="avatar-img rounded-circle" alt="avatar">
				</a>
				<div class="media-body">
					<div class="d-flex align-items-center">
						<div class="flex">
							<a href="#" class="text-body bold">Kaci M. Langston</a>
						</div>
						<small class="text-muted">just now</small>
					</div>
					<div>Coming along nicely, we&#39;ve got a draft for the client questionnaire completed, take a look! 🤓</div>
					<a href="#" class="media align-items-center mt-2 text-underline-0 bg-white p-2">
						<span class="avatar avatar-xs mr-2">
							<span class="avatar-title rounded-circle">
								<i class="material-icons">attach_file</i>
							</span>
						</span>
						<span class="media-body" style="line-height: 1.5">
							<span class="text-primary">draft.doc</span><br>
							<span class="text-muted">15kb</span>
						</span>
					</a>
				</div>
			</div>
		</div>
	</div>

	<div class="input-group input-group-merge">
		<input type="text" class="form-control form-control-appended" required="" placeholder="Type message">
		<div class="input-group-append">
			<div class="input-group-text pr-2">
				<button class="btn btn-flush" type="button"><i class="material-icons">tag_faces</i></button>
			</div>
			<div class="input-group-text pl-0">
				<div class="custom-file custom-file-naked d-flex" style="width: 24px">
					<input type="file" class="custom-file-input" id="customFile">
					<label class="custom-file-label" style="color: inherit;" for="customFile">
						<i class="material-icons">attach_file</i>
					</label>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="col-lg-4 py-3 px-0 bg-white border-left d-flex flex-column">
	<div class="form-group px-3">
		<div class="input-group input-group-merge input-group-rounded">
			<input type="text" class="form-control form-control-prepended" placeholder="Filter members">
			<div class="input-group-prepend">
				<div class="input-group-text">
					<span class="material-icons">filter_list</span>
				</div>
			</div>
		</div>
	</div>
	<div class="flex d-flex flex-column">
		<div data-simplebar class="h-100">
			<div class="list-group list-group-flush" style="position: relative; z-index: 0;">
				<div class="list-group-item d-flex media align-items-center">
					<a href="#" class="avatar avatar-sm media-left mr-3">
						<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_rsz_1andy-lee-642320-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
					</a>
					<div class="media-body">
						<p class="m-0">
							<a href="#" class="text-body"><strong>Jenell D. Matney</strong></a><br>
							<span class="text-muted">Founder and CEO</span>
						</p>
					</div>
				</div>
				<div class="list-group-item d-flex media align-items-center">
					<a href="#" class="avatar avatar-sm media-left mr-3">
						<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_daniel-gaffey-1060698-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
					</a>
					<div class="media-body">
						<p class="m-0">
							<a href="#" class="text-body"><strong>Sherri J. Cardenas</strong></a><br>
							<span class="text-muted">Software Engineer</span>
						</p>
					</div>
				</div>
				<div class="list-group-item d-flex media align-items-center">
					<a href="#" class="avatar avatar-sm media-left mr-3">
						<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_jeremy-banks-798787-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
					</a>
					<div class="media-body">
						<p class="m-0">
							<a href="#" class="text-body"><strong>Joseph S. Ferland</strong></a><br>
							<span class="text-muted">Web Designer</span>
						</p>
					</div>
				</div>
				<div class="list-group-item d-flex media align-items-center">
					<a href="#" class="avatar avatar-sm media-left mr-3">
						<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_joao-silas-636453-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
					</a>
					<div class="media-body">
						<p class="m-0">
							<a href="#" class="text-body"><strong>Bryan K. Davis</strong></a><br>
							<span class="text-muted">Web Developer</span>
						</p>
					</div>
				</div>
				<div class="list-group-item d-flex media align-items-center">
					<a href="#" class="avatar avatar-sm media-left mr-3">
						<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_luke-porter-261779-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
					</a>
					<div class="media-body">
						<p class="m-0">
							<a href="#" class="text-body"><strong>Elizabeth J. Ohara</strong></a><br>
							<span class="text-muted">Business Analyst</span>
						</p>
					</div>
				</div>
				<div class="list-group-item d-flex media align-items-center">
					<a href="#" class="avatar avatar-sm media-left mr-3">
						<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_michael-dam-258165-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
					</a>
					<div class="media-body">
						<p class="m-0">
							<a href="#" class="text-body"><strong>Kaci M. Langston</strong></a><br>
							<span class="text-muted">Human Resources</span>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>