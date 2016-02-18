<?php

namespace fonclub\languages\models;

use Yii;

/**
 * This is the model class for table "{{%languages}}".
 *
 * @property string $id
 * @property string $url
 * @property string $locale
 * @property string $name
 * @property integer $is_default
 */
class Languages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%languages}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['url', 'locale', 'name'], 'required'],
            [['is_default'], 'integer'],
            [['url', 'locale'], 'string', 'max' => 20],
            [['name'], 'string', 'max' => 64]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'url' => Yii::t('app', 'Url'),
            'locale' => Yii::t('app', 'Locale'),
            'name' => Yii::t('app', 'Name'),
            'is_default' => Yii::t('app', 'Is Default'),
        ];
    }
}
