<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "linha_faturas".
 *
 * @property int $ID
 * @property int $fatura_id
 * @property int $produto_id
 * @property int $quantidade
 *
 * @property Faturas $fatura
 * @property Produtos $produto
 */
class LinhaFaturas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'linha_faturas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fatura_id', 'produto_id', 'quantidade'], 'required'],
            [['fatura_id', 'produto_id', 'quantidade'], 'integer'],
            [['fatura_id'], 'exist', 'skipOnError' => true, 'targetClass' => Faturas::class, 'targetAttribute' => ['fatura_id' => 'ID']],
            [['produto_id'], 'exist', 'skipOnError' => true, 'targetClass' => Produtos::class, 'targetAttribute' => ['produto_id' => 'ID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'fatura_id' => 'Fatura ID',
            'produto_id' => 'Produto ID',
            'quantidade' => 'Quantidade',
        ];
    }

    /**
     * Gets query for [[Fatura]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFatura()
    {
        return $this->hasOne(Faturas::class, ['ID' => 'fatura_id']);
    }

    /**
     * Gets query for [[Produto]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProduto()
    {
        return $this->hasOne(Produtos::class, ['ID' => 'produto_id']);
    }
}
