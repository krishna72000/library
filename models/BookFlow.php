<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "book_flow".
 *
 * @property int $id
 * @property int $fk_book_id
 * @property int $taken_by
 * @property string $taken_date
 * @property string|null $return_date
 * @property int $is_return
 */
class BookFlow extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'book_flow';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fk_book_id', 'taken_by'], 'required'],
            [['fk_book_id', 'taken_by', 'is_return'], 'integer'],
            [['taken_date', 'return_date'], 'safe'],
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
            'taken_by' => 'Taken By',
            'taken_date' => 'Taken Date',
            'return_date' => 'Return Date',
            'is_return' => 'Is Return',
        ];
    }
}
