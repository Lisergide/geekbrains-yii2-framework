<?php


namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\EntryForm;

class TestController extends Controller {

  public function actionHello() {
    return $this->render('Hello');
  }

  public function actionEntry() {
    $model = new EntryForm();
    if ($model->load(Yii::$app->request->post()) && $model->validate()) {
      return $this->render('entry-confirm', ['model' => $model]);
    } else {
      return $this->render('entry', ['model' => $model]);
    }
  }

  public function actionIndex() {
    return $this->renderContent('Этот текст выведен из метода actionIndex, контроллера Test.');
  }

}