<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(); ?>
<?= $form->field($model, 'name')?>
<?= $form->field($model, 'email')?>
<div class="form-group">
  <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary'])?>
</div>

<?php ActiveForm::end(); ?>
