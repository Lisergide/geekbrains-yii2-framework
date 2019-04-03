<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Test page';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-hello">
  <h1><?= Html::encode($this->title) ?></h1>

  <p>
    Test Hello, World!
  </p>
</div>

