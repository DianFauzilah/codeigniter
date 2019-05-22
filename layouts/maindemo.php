<?php
/**
 * @var string $content
 * @var \yii\web\View $this
 */

use yii\helpers\Html;
use yii\helpers\Url;
use themes\stackadmin\assets\ThemePluginAsset;

$themeAsset = ThemePluginAsset::register($this);
$this->registerCssFile('https://d1azc1qln24ryf.cloudfront.net/114779/Socicon/style-cf.css');
$this->registerCssFile($themeAsset->baseUrl . '/demo/css/choose.css');

$this->beginPage();?>
<!DOCTYPE html>
<html lang="<?php echo Yii::$app->language ?>" dir="ltr">
<head>
	<meta charset="<?php echo Yii::$app->charset ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php echo Html::csrfMetaTags() ?>
	<title><?php echo Html::encode($this->pageTitle) ?></title>
	<?php $this->head(); ?>
	<script type="text/javascript">
		var themeAssetUrl = '<?php echo $themeAsset->baseUrl; ?>';
	</script>
</head>

<body>
<?php $this->beginBody();?>
<div class="stack-choose-header stack-choose-header--shadow">
	<div class="navbar navbar-dark navbar-expand-lg">
		<div class="container p-0 d-flex justify-content-between">
			<div class="navbar-brand-container">
				<a href="http://www.frontted.com" class="h4 text-white">
					<img src="<?php echo $themeAsset->baseUrl; ?>/demo/images/frontted-logo-white.svg" alt="Frontted">
					<strong>frontted</strong>
				</a>
			</div>
			<ul class="nav navbar-nav ml-auto d-none d-md-flex">
				<li class="nav-item">
					<a href="mailto:admin@ommu.co?subject=Hi! I have a question about Stack Admin" class="nav-link active">
						<i class="material-icons">help_outline</i> Get Help
					</a>
				</li>
				<li class="nav-item ml-3">
					<a href="https://github.com/ommu/theme-stackadmin" class="btn btn-primary">Get Stack</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="banner text-center">
		<div class="container">
			<div class="mb-5">
				<img class="navbar-brand-icon mb-3" src="<?php echo $themeAsset->baseUrl; ?>/images/stack-logo-white.svg" width="40" alt="Stack">
				<h1 class="text-white h2">Stack Admin Dasboards</h1>
				<p class="lead text-muted-light">The easiest way to build or style your dashboard/application, designed &amp; coded by the Frontted team. <br />Stack includes 100+ Pages, Componenents &amp; Applications.</p>
			</div>
			<a href=""<?php echo Url::to(['/stackadmin-page/dashboard']);?>" class="btn btn-light btn-lg btn-rounded">Live Demo</a>
		</div>
		<div>
			<a href=""<?php echo Url::to(['/stackadmin-page/dashboard']);?>" target="_blank">
				<img src="<?php echo $themeAsset->baseUrl; ?>/demo/images/header.png" class="banner--image img-fluid" alt="">
			</a>
		</div>
	</div>
</div>
<div class="container stack-choose-demos text-center">
	<div class="stack-choose-headline  text-center mb-3">
		<div class="container">
			<h2 class="h1 mb-0">Demos</h2>
			<p class="lead text-muted">Multiple Dashboards, Pages &amp; Apps </p>
		</div>
	</div>
	<?php echo $content; ?>
</div>
<div class="stack-choose-headline bg-white stack-choose-headline--bt text-center pt-5">
	<div class="container">
		<h2 class="h1 mb-0">Features &amp; Highlights</h2>
		<p class="lead text-muted">What's included with the package</p>
	</div>
</div>
<div class="bg-white">
	<div class="container stack-choose-demos text-center pt-4">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="card">
						<div class="my-4">
							<div class="pt-2 pb-4">
								<i class="fas fa-space-shuttle icon-40pt "></i>
							</div>
							<h4 class="m-0">Monthly Updates</h4>
							<p class="text-center text-muted m-0">FREE Updates &amp; Releases.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<div class="my-4">
							<div class="pt-2 pb-4">
								<i class="fas fa-layer-group icon-40pt"></i>
							</div>
							<h4 class="m-0">100+ HTML Pages</h4>
							<p class="text-center text-muted m-0">Multiple HTML sample pages.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<div class="my-4">
							<div class="pt-2 pb-4">
								<i class="fas fa-toolbox icon-40pt"></i>
							</div>
							<h4 class="m-0">Premium Support</h4>
							<p class="text-center text-muted m-0">Get help &amp; support from our team.</p>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="card">
						<div class="my-4">
							<div class="pt-2 pb-4">
								<i class="fas fa-route icon-40pt"></i>
							</div>
							<h4 class="m-0">Open Roadmap</h4>
							<p class="text-center text-muted m-0">Our plan is simple... grow continuously.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<div class="my-4">
							<div class="pt-2 pb-4">
								<i class="fas fa-trophy icon-40pt"></i>
							</div>
							<h4 class="m-0">Design &amp; Code</h4>
							<p class="text-center text-muted m-0">Use of latest design &amp; code trends.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<div class="my-4">
							<div class="pt-2 pb-4">
								<i class="fas fa-jedi icon-40pt"></i>
							</div>
							<h4 class="m-0">Bootstrap 4 Jedi's</h4>
							<p class="text-center text-muted m-0">Developed on top of BS 4.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<div class="my-4">
							<div class="pt-2 pb-4">
								<i class="fas fa-mobile icon-40pt"></i>
							</div>
							<h4 class="m-0">Mobile Ready</h4>
							<p class="text-center text-muted m-0">Fully responsive &amp; Mobile ready.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<div class="my-4">
							<div class="pt-2 pb-4">
								<i class="fas fa-chart-line icon-40pt"></i>
							</div>
							<h4 class="m-0">Charts</h4>
							<p class="text-center text-muted m-0">We took Chart.js to the next level.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<div class="my-4">
							<div class="pt-2 pb-4">
								<i class="fas fa-boxes icon-40pt"></i>
							</div>
							<h4 class="m-0">UI Components</h4>
							<p class="text-center text-muted m-0">Simple and Effective HTML Components.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="bg-dark text-white bg-pattern">
	<div class="container subscribe stack-choose-demos">
		<div class="container">
			<div class="d-flex align-items-middle py-3">
				<img class="navbar-brand-icon mr-3" src="<?php echo $themeAsset->baseUrl; ?>/images/stack-logo-white.svg" width="40" alt="Stack">
				<div class="">
					<h4 class="m-0 text-white">Stack Admin Dashboards</h4>
					<div class="text-muted-light lead">The building blocks of your next application.</div>
				</div>
				<div class="ml-auto">
					<a href="https://github.com/ommu/theme-stackadmin" class="btn btn-primary btn-lg">Get it Now!</a>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage(); ?>
