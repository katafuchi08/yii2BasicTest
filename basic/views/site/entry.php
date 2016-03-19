<?php
use\yii\helpers	\Html;
use\yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin(); ?>
	<?= $form->field($model, 'name')->label('お名前') ?>
	<?= $form->field($model, 'email')->label('メールアドレス') ?>
	<div class="form-group">
		<?= Html::submitButton('送信', ['class' => 'btn btn-primary']) ?>
	</div>
<?php ActiveForm::end(); ?>