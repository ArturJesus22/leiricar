<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "favoritos".
 *
 * @property int $ID_cliente
 * @property int $ID_produto
 *
 * @property User $cliente
 * @property Produtos $produto
 */
class Favoritos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'favoritos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_cliente', 'ID_produto'], 'required'],
            [['ID_cliente', 'ID_produto'], 'integer'],
            [['ID_cliente', 'ID_produto'], 'unique', 'targetAttribute' => ['ID_cliente', 'ID_produto']],
            [['ID_cliente'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['ID_cliente' => 'id']],
            [['ID_produto'], 'exist', 'skipOnError' => true, 'targetClass' => Produtos::class, 'targetAttribute' => ['ID_produto' => 'ID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID_cliente' => 'Id Cliente',
            'ID_produto' => 'Id Produto',
        ];
    }

    /**
     * Gets query for [[Cliente]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCliente()
    {
        return $this->hasOne(User::class, ['id' => 'ID_cliente']);
    }

    /**
     * Gets query for [[Produto]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProduto()
    {
        return $this->hasOne(Produtos::class, ['ID' => 'ID_produto']);
    }
}
