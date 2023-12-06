<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "avaliacoes".
 *
 * @property int $id
 * @property string $comentario
 * @property string $data_avaliacao
 * @property int $avaliacao
 * @property int $ID_cliente
 * @property int $ID_produto
 *
 * @property User $cliente
 * @property Produtos $produto
 */
class Avaliacoes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'avaliacoes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['comentario', 'data_avaliacao', 'avaliacao', 'ID_cliente', 'ID_produto'], 'required'],
            [['data_avaliacao'], 'safe'],
            [['avaliacao', 'ID_cliente', 'ID_produto'], 'integer'],
            [['comentario'], 'string', 'max' => 200],
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
            'id' => 'ID',
            'comentario' => 'Comentario',
            'data_avaliacao' => 'Data Avaliacao',
            'avaliacao' => 'Avaliacao',
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
