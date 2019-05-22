<?php 
/**
 * @var string $content
 * @var \yii\web\View $this
 */

use yii\helpers\Html;
use yii\helpers\Url;
?>

<?php $this->beginContent('@themes/stackadmin/layouts/admin_default.php'); ?>

<?php echo \app\components\widgets\Alert::widget(['closeButton'=>false]); ?>

<div class="card">
	<div class="card-body">
		<?php echo $content; ?>
	</div>
</div>

<?php $this->endContent(); ?>