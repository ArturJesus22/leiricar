<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "produtos".
 *
 * @property int $ID
 * @property string $Nome
 * @property string|null $Descricao
 * @property float $Preco
 * @property int $ID_categoria
 * @property int|null $Quantidade
 *
 * @property Avaliacoes[] $avaliacoes
 * @property Carrinho[] $carrinhos
 * @property Categorias $categoria
 * @property Clientes[] $clientes
 * @property Favoritos[] $favoritos
 * @property Imagens[] $imagens
 * @property LinhaFaturas[] $linhaFaturas
 */
class Produto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'produtos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nome', 'Preco', 'ID_categoria'], 'required'],
            [['Descricao'], 'string'],
            [['Preco'], 'number'],
            [['ID_categoria', 'Quantidade'], 'integer'],
            [['Nome'], 'string', 'max' => 255],
            [['ID_categoria'], 'exist', 'skipOnError' => true, 'targetClass' => Categorias::class, 'targetAttribute' => ['ID_categoria' => 'ID_categoria']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'Nome' => 'Nome',
            'Descricao' => 'Descricao',
            'Preco' => 'Preco',
            'ID_categoria' => 'Id Categoria',
            'Quantidade' => 'Quantidade',
        ];
    }

    /**
     * Gets query for [[Avaliacoes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAvaliacoes()
    {
        return $this->hasMany(Avaliacoes::class, ['ID_produto' => 'ID']);
    }

    /**
     * Gets query for [[Carrinhos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCarrinhos()
    {
        return $this->hasMany(Carrinho::class, ['ID_produto' => 'ID']);
    }

    /**
     * Gets query for [[Categoria]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategoria()
    {
        return $this->hasOne(Categorias::class, ['ID_categoria' => 'ID_categoria']);
    }

    /**
     * Gets query for [[Clientes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getClientes()
    {
        return $this->hasMany(Clientes::class, ['id' => 'ID_cliente'])->viaTable('favoritos', ['ID_produto' => 'ID']);
    }

    /**
     * Gets query for [[Favoritos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFavoritos()
    {
        return $this->hasMany(Favoritos::class, ['ID_produto' => 'ID']);
    }

    /**
     * Gets query for [[Imagens]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getImagens()
    {
        return $this->hasMany(Imagens::class, ['ID_produto' => 'ID']);
    }

    /**
     * Gets query for [[LinhaFaturas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLinhaFaturas()
    {
        return $this->hasMany(LinhaFaturas::class, ['produto_id' => 'ID']);
    }
}
