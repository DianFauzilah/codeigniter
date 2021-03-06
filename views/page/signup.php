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
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use themes\stackadmin\assets\ThemePluginAsset;

$themeAsset = ThemePluginAsset::register($this);
?>

	<form action="" novalidate>
		<div class="form-group">
			<label class="text-label" for="name_2">Name:</label>
			<div class="input-group input-group-merge">
				<input id="name_2" type="text" required="" class="form-control form-control-prepended" placeholder="John Doe">
				<div class="input-group-prepend">
					<div class="input-group-text">
						<span class="far fa-user"></span>
					</div>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label class="text-label" for="email_2">Email Address:</label>
			<div class="input-group input-group-merge">
				<input id="email_2" type="email" required="" class="form-control form-control-prepended" placeholder="john@doe.com">
				<div class="input-group-prepend">
					<div class="input-group-text">
						<span class="far fa-envelope"></span>
					</div>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label class="text-label" for="password_2">Password:</label>
			<div class="input-group input-group-merge">
				<input id="password_2" type="password" required="" class="form-control form-control-prepended" placeholder="Enter your password">
				<div class="input-group-prepend">
					<div class="input-group-text">
						<span class="far fa-key"></span>
					</div>
				</div>
			</div>
		</div>
		<div class="form-group mb-30">
			<div class="custom-control custom-checkbox">
				<input type="checkbox" checked="" class="custom-control-input" id="terms" />
				<label class="custom-control-label" for="terms">I accept <a href="#">Terms and Conditions</a></label>
			</div>
		</div>
		<div class="form-group text-center">
			<button class="btn btn-primary mb-2" type="submit">Create Account</button><br/>
			<a class="text-body text-underline" href="<?php echo Url::to(ArrayHelper::merge(['login'], Yii::$app->request->get()));?>">Have an account? Login</a>
		</div>
	</form>