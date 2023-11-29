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
 * @property int $id_iva
 *
 * @property Avaliacoes[] $avaliacoes
 * @property Carrinho[] $carrinhos
 * @property Categorias $categoria
 * @property User[] $clientes
 * @property Favoritos[] $favoritos
 * @property Imagens[] $imagens
 * @property Ivas $iva
 * @property LinhaFaturas[] $linhaFaturas
 */
class Produtos extends \yii\db\ActiveRecord
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
            [['Nome', 'Preco', 'ID_categoria', 'id_iva'], 'required'],
            [['Descricao'], 'string'],
            [['Preco'], 'number'],
            [['ID_categoria', 'Quantidade', 'id_iva'], 'integer'],
            [['Nome'], 'string', 'max' => 255],
            [['Nome'], 'unique'],
            [['ID_categoria'], 'exist', 'skipOnError' => true, 'targetClass' => Categorias::class, 'targetAttribute' => ['ID_categoria' => 'ID_categoria']],
            [['id_iva'], 'exist', 'skipOnError' => true, 'targetClass' => Ivas::class, 'targetAttribute' => ['id_iva' => 'id']],
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
            'id_iva' => 'Id Iva',
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
        return $this->hasMany(User::class, ['id' => 'ID_cliente'])->viaTable('favoritos', ['ID_produto' => 'ID']);
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
     * Gets query for [[Iva]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIva()
    {
        return $this->hasOne(Ivas::class, ['id' => 'id_iva']);
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
