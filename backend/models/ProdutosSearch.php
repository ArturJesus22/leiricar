<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Produtos;

/**
 * ProdutosSearch represents the model behind the search form of `common\models\Produtos`.
 */
class ProdutosSearch extends Produtos
{
    /**
     * {@inheritdoc}
     */

    public $nomeCategoria;
    public function rules()
    {
        return [
            [['ID', 'ID_categoria', 'Quantidade', 'id_iva'], 'integer'],
            [['Nome', 'Descricao', ], 'safe'],
            [['Preco'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Produtos::find();
        $query->joinWith(['categoria']);

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'ID' => $this->ID,
            'Preco' => $this->Preco,
            'ID_categoria' => $this->ID_categoria,
            'Quantidade' => $this->Quantidade,
            'id_iva' => $this->id_iva,
        ]);

        $query->andFilterWhere(['like', 'Nome', $this->Nome])
            ->andFilterWhere(['like', 'Descricao', $this->Descricao])
            ->andFilterWhere(['like', 'categorias.nome_categoria', $this->nomeCategoria]);

        return $dataProvider;
    }
}
