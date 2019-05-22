<?php 
/**
 * @var string $content
 * @var \yii\web\View $this
 */

use yii\helpers\Html;
use yii\helpers\Url;

$themeAsset = \themes\stackadmin\assets\ThemePluginAsset::register($this);
?>

<?php $this->beginContent('@themes/stackadmin/layouts/default.php'); ?>

<div style="padding-bottom: calc(5.125rem / 2); position: relative; margin-bottom: 1.5rem;">
	<div class="bg-primary" style="min-height: 150px;">
		<div class="d-flex align-items-end <?php echo in_array($this->subLayout, ['fixed','mini']) ? 'container' : 'container-fluid';?> page__container" style="position: absolute; left: 0; right: 0; bottom: 0;">
			<div class="avatar avatar-xl">
				<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/demi.png" alt="avatar" class="avatar-img rounded" style="border: 2px solid white;">
			</div>
			<div class="card-header card-header-tabs-basic nav flex" role="tablist">
				<a href="#activity" class="active show" data-toggle="tab" role="tab" aria-controls="activity" aria-selected="true">Activity</a>
				<a href="#purchases" data-toggle="tab" role="tab" aria-controls="purchases" aria-selected="false">Purchases</a>
				<a href="#emails" data-toggle="tab" role="tab" aria-controls="emails" aria-selected="false">Emails</a>
				<a href="#quotes" data-toggle="tab" role="tab" aria-controls="quotes" aria-selected="false">Quotes</a>
			</div>
		</div>
	</div>
</div>

<div class="<?php echo in_array($this->subLayout, ['fixed','mini']) ? 'container' : 'container-fluid';?> page__container">
	<?php echo $content; ?>
</div>

<?php $this->endContent(); ?>