<?php
/**
 * @var string $content
 * @var \yii\web\View $this
 */

use yii\helpers\Html;
use yii\helpers\Url;
use app\components\widgets\MenuContent;

$themeAsset = \themes\stackadmin\assets\ThemePluginAsset::register($this);
?>

<?php if($this->subLayout == 'fluid') {?>
<div class="page__header">
<?php }?>

<div class="<?php echo in_array($this->subLayout, ['fixed','mini']) ? 'container' : 'container-fluid';?> page__heading-container">
	<div class="page__heading d-flex align-items-center">
		<div class="flex">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb mb-0">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
				</ol>
			</nav>
			<h1 class="m-0"><?php echo $this->title;?></h1>
		</div>
		<?php echo !empty($this->params['menu']['content']) ? MenuContent::widget(['items' => $this->params['menu']['content']]) : '';?>
	</div>
</div>

<?php if($this->subLayout == 'fluid') {?>
</div>
<?php }?>