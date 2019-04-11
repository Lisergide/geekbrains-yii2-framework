<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property string $name
 * @property string $price
 * @property string $created_at
 */
class Product extends \yii\db\ActiveRecord
{
    const SCENARIO_UPDATE = 'update';

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     * После того, как создали метод scenarios(), и указали для сценария по умолчанию только name,
     * работа формы изменилась следующим образом: теперь, если не указано никаких других сценариев,
     * то по дефолту необходимо производить валидацию только атрибута name, в тоже время он считается безопасным,
     * безопасные и не безопасные атрибуты описанные в методе rules(), теперь не действуют.
     * Для выполнения дальнейших заданий, закомментируем данный метод
     */
    // Создать в Product метод scenarios() указав, что для сценария по умолчанию активный атрибут только name
    public function scenarios() {
        return [
//          self::SCENARIO_DEFAULT => ['name']

            // Настроить Product модель так, что бы значение атрибута name не изменялось при изменении данных в
            // actionUpdate даже если поле name в форме есть.
          self::SCENARIO_UPDATE => ['price', 'created_at']

        ];
    }


    /**
     * {@inheritdoc}
     */
    // Настроить правила в rules() модели Product и проверить на странице редактирования (product/create)
    public function rules()
    {
        return [
            [['name', 'price', 'created_at'], 'required'],
            [['created_at'], 'safe'],
            // name - длина до 20 символов
            [['name', 'price'], 'string', 'max' => 20],
            // необходимо обрезать пробелы (trim) и вырезать тэги (strip_tags()),
            //сделать это нужно с помощью анонимной функции
            [['name'], 'filter', 'filter' => function($value) {
                    return trim(strip_tags($value));
            }],
            // price - только целые числа больше 0 и меньше 1000
            [['price'], 'integer', 'min' => 0, 'max' => 1000, 'on' => 'create'],
            [['price'], 'integer', 'min' => 1000, 'max' => 2000, 'on' => 'update'],

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'price' => 'Price',
            'created_at' => 'Создан',
        ];
    }
}
