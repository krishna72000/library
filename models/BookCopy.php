<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "book_copy".
 *
 * @property int $id
 * @property int $fk_book_id
 * @property string $bookno
 * @property int|null $taken_by
 * @property int $status
 */
class BookCopy extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'book_copy';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fk_book_id', 'bookno'], 'required'],
            [['fk_book_id', 'taken_by', 'status'], 'integer'],
            [['bookno'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fk_book_id' => 'Fk Book ID',
            'bookno' => 'Bookno',
            'taken_by' => 'Taken By',
            'status' => 'Status',
        ];
    }
}
