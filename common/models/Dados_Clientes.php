<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "clientes".
 *
 * @property int $id
 * @property string $nome
 * @property string $codigopostal
 * @property string $localidade
 * @property string $rua
 * @property string|null $nif
 * @property string $telefone
 * @property int $user_id
 *
 * @property User $user
 */
class Dados_Clientes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */


    public static function tableName()
    {
        return 'clientes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'codigopostal', 'localidade', 'rua', 'telefone', 'user_id'], 'required'],
            [['user_id'], 'integer'],
            [['nome'], 'string', 'max' => 255],
            [['codigopostal'], 'string', 'max' => 8],
            [['localidade', 'rua'], 'string', 'max' => 100],
            [['nif'], 'string', 'max' => 10],
            [['telefone'], 'string', 'max' => 12],
            [['nif'], 'unique'],
            ['codigopostal', 'match', 'pattern' => '^\d{4}-\d{3}?$^', 'message' => 'Código de Postal Inválido'],
            ['telefone', 'match', 'pattern' => '^\d{9}?$^', 'message' => 'Número de telefone inválido'],
            ['telefone', 'string', 'max' => 9, 'message' => 'Número de telefone com mais de 9 digitos'],
            ['nif', 'match', 'pattern' => '^\d{9}?$^', 'message' => 'NIF Inválido'],
            ['nif', 'string', 'max' => 9, 'message' => 'NIF com mais de 9 digitos'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'codigopostal' => 'Codigopostal',
            'localidade' => 'Localidade',
            'rua' => 'Rua',
            'nif' => 'Nif',
            'telefone' => 'Telefone',
            'user_id' => 'User ID',
        ];
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */

    public function getUser()
    {
        return $this->hasOne(User::class, ['id' => 'user_id']);
    }
    public static function findIdentity()
    {
        return Yii::$app->user->id;
    }

}
