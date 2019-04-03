<?php
/* @var $this yii\web\View */
/* @var $product \app\models\Product */

use yii\helpers\Html;

$this->title = 'Test page';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-hello">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Test Hello, World!
    </p>

    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda commodi nostrum quidem unde. Aperiam iste
        iure nam officia officiis quia, quisquam repellat? Commodi consequatur deserunt dignissimos quam sapiente
        voluptas voluptate.
    </p>
    <h3><?php echo $product->name?></h3>

    <?=  \yii\widgets\DetailView::widget(['model' => $product])?>
</div>

