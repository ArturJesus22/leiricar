<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "empresa".
 *
 * @property int $id
 * @property string $designacaoSocial
 * @property string $email
 * @property string $telefone
 * @property string $nif
 * @property string $morada
 * @property string $codigoPostal
 * @property string $localidade
 * @property int $capitalSocial
 */
class Empresa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'empresa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['designacaoSocial', 'email', 'telefone', 'nif', 'morada', 'codigoPostal', 'localidade', 'capitalSocial'], 'required'],
            [['capitalSocial'], 'integer'],
            [['designacaoSocial', 'email', 'morada', 'localidade'], 'string', 'max' => 100],
            [['telefone', 'nif', 'codigoPostal'], 'string', 'max' => 9],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'designacaoSocial' => 'Designacao Social',
            'email' => 'Email',
            'telefone' => 'Telefone',
            'nif' => 'Nif',
            'morada' => 'Morada',
            'codigoPostal' => 'Codigo Postal',
            'localidade' => 'Localidade',
            'capitalSocial' => 'Capital Social',
        ];
    }
}
