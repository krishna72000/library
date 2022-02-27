<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $passwd
 * @property string $create_at
 * @property string $authKey
 * @property string $accessToken
 * @property int $status
 */
class User extends \yii\db\ActiveRecord implements IdentityInterface
{
    /**
     * {@inheritdoc}
     */
    public $password_repeat;
    public $password;
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'passwd','password','password_repeat'], 'required'],
            [['email'],'unique'],
            [['status'], 'integer'],
            [['create_at'], 'safe'],
            [['name', 'email', 'authKey', 'accessToken'], 'string', 'max' => 100],
            [['passwd',], 'string', 'max' => 100],
            ['password', 'string', 'min' => 6],
            ['password_repeat', 'compare', 'compareAttribute'=>'password', 'message'=>"Passwords don't match" ],
        
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
            'email' => 'Email',
            'passwd' => 'Passwd',
            'password_repeat'=>'Repeat Password',
            'create_at' => 'Create At',
            'authKey' => 'Auth Key',
            'accessToken' => 'Access Token',
            'status' => 'Status',
            
        ];
    }
    
    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
        return self::findOne($id);
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return self::find()->where(["accessToken"=>$token])->one();
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        return self::find()->where(["email"=>$username])->one();
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        return $this->authKey;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return $this->passwd === md5($password);
    }

}
