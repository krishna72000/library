<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "book".
 *
 * @property int $id
 * @property string $name
 * @property string $edition
 * @property string $author
 * @property int $pages
 * @property int $copy_no
 * @property string $create_at
 * @property int $create_by
 * @property string $category
 * @property int $status
 */
class Book extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'book';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'edition', 'author', 'pages', 'copy_no', 'create_by', 'category'], 'required'],
            [['pages', 'copy_no', 'create_by', 'status'], 'integer'],
            [['create_at'], 'safe'],
            [['name', 'author'], 'string', 'max' => 200],
            [['edition'], 'string', 'max' => 10],
            [['category'], 'string', 'max' => 500],
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
            'edition' => 'Edition',
            'author' => 'Author',
            'pages' => 'Pages',
            'copy_no' => 'Copy No',
            'create_at' => 'Create At',
            'create_by' => 'Create By',
            'category' => 'Category',
            'status' => 'Status',
        ];
    }
}
