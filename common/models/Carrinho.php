<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "carrinho".
 *
 * @property int $ID
 * @property int $ID_produto
 * @property int $ID_cliente
 * @property int $Quantidade
 *
 * @property User $cliente
 * @property Produtos $produto
 */
class Carrinho extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'carrinho';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_produto', 'ID_cliente', 'Quantidade'], 'required'],
            [['ID_produto', 'ID_cliente', 'Quantidade'], 'integer'],
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
            'ID' => 'ID',
            'ID_produto' => 'Id Produto',
            'ID_cliente' => 'Id Cliente',
            'Quantidade' => 'Quantidade',
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
