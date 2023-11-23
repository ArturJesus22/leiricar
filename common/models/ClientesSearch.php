<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Clientes;

class ClientesSearch extends Clientes
{
    public function rules()
    {
        return [
            [['id', 'nif', 'created_at', 'updated_at'], 'integer'],
            [['username', 'password_hash', 'email', 'Morada'], 'safe'],
        ];
    }

    public function scenarios()
    {
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Clientes::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'nif', $this->nif]);

        $query->andFilterWhere(['like', 'username', $this->username]);

        return $dataProvider;
    }
}
