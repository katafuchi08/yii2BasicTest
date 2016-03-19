<?php

use yii\helpers\Html;

?>

<ul>
	<li>
		<label>名前</label>：<?= Html::encode($model->name) ?>
	</li>
	<li>
		<label>メール</label>：<?= Html::encode($model->email) ?>
	</li>
</ul>