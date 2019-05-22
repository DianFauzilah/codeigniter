<?php 
/**
 * @var string $content
 * @var \yii\web\View $this
 */

use yii\helpers\Html;
use yii\helpers\Url;
?>

<?php $this->beginContent('@themes/stackadmin/layouts/default.php'); ?>

<?php //heading (breadcrumb and title)
if($this->titleShow)
	echo $this->subLayout != 'fluid' ? \themes\stackadmin\components\Heading::widget() : '';?>

<div class="<?php echo in_array($this->subLayout, ['fixed','mini']) ? 'container' : 'container-fluid';?> page__container <?php echo !$this->titleShow ? 'pt-4 mt-3' : '';?>">
	<?php echo $content; ?>
</div>

<?php $this->endContent(); ?>