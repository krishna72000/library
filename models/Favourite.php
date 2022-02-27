<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "favourite".
 *
 * @property int $id
 * @property int $fk_user_id
 * @property int $fk_book_id
 * @property string $create_at
 */
class Favourite extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'favourite';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fk_user_id', 'fk_book_id'], 'required'],
            [['fk_user_id', 'fk_book_id'], 'integer'],
            [['create_at'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fk_user_id' => 'Fk User ID',
            'fk_book_id' => 'Fk Book ID',
            'create_at' => 'Create At',
        ];
    }
}
