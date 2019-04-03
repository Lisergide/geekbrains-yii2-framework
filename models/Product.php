<?php


namespace app\models;

use yii\base\Model;

class Product extends Model {
  public $id;
  public $name;
  public $category;
  public $price;

  private static $product = [
    'PC' => [
      'id' => '1',
      'name' => 'HP',
      'category' => '',
    ],
  ];


}