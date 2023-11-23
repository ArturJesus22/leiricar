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
 * @property int|null $Quantidade
 * @property string $Imagem
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
            [['Nome', 'Preco', 'Imagem'], 'required'],
            [['Descricao'], 'string'],
            [['Preco'], 'number'],
            [['Quantidade'], 'integer'],
            [['Nome', 'Imagem'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => Yii::t('app', 'ID'),
            'Nome' => Yii::t('app', 'Nome'),
            'Descricao' => Yii::t('app', 'Descricao'),
            'Preco' => Yii::t('app', 'Preco'),
            'Quantidade' => Yii::t('app', 'Quantidade'),
            'Imagem' => Yii::t('app', 'Imagem'),
        ];
    }

    public function getImageUrl()
    {
        return "../web/assets/img/" . $this->Imagem;
    }
}
