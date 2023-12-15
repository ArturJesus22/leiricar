<?php

namespace common\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "imagens".
 *
 * @property int $id
 * @property string $fileName
 * @property int $ID_produto
 *
 * @property Produtos $produto
 */
class Imagens extends \yii\db\ActiveRecord
{

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'imagens';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fileName', 'ID_produto'], 'required'],
            [['ID_produto'], 'integer'],
            [['fileName'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg, jpeg'],
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
            'fileName' => 'Imagem',
            'ID_produto' => 'Produto',
        ];
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

    public function upload()
    {
        $this->fileName = UploadedFile::getInstance($this, 'fileName');
        if ($this->validate()) {
            $uploadPath = 'images/'; // Pasta onde as imagens serão guardadas
            $filePath = $uploadPath . $this->fileName->baseName . '.' . $this->fileName->extension;

            // Guardar a imagem na pasta do frontend
            $this->fileName->saveAs(Yii::getAlias('@frontend') . '/web/' . $filePath);

            // Guardar o caminho da imagem na bd
            $this->fileName = $filePath;

            if ($this->save(false)) {
                return true;
            }
        }
        return false;
    }

}