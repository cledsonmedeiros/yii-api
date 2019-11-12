<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "noticia".
 *
 * @property int $id
 * @property string $title
 * @property string $head
 * @property string $body
 * @property int $STATUS
 */
class Noticia extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'noticia';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'head', 'body', 'STATUS'], 'required'],
            [['head', 'body'], 'string'],
            [['STATUS'], 'integer'],
            [['title'], 'string', 'max' => 60],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Título',
            'head' => 'Cabeça',
            'body' => 'Corpo',
            'STATUS' => 'Status',
        ];
    }

    public function fields()
    {
        return [
            'id',
            'title',
            'status' => 'STATUS',
        ];
    }
}
