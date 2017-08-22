<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "data".
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $Date_of_birth
 * @property string $note
 */
class Data extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'data';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'email', 'phone', 'Date_of_birth', 'note'], 'required'],
            [[ 'note'], 'string', 'max' => 300],
            [['email'],'email'],
            [['phone'],'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'Date_of_birth' => 'Date Of Birth',
            'note' => 'Note',
        ];
    }
}
