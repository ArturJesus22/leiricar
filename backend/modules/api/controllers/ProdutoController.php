<?php

namespace backend\modules\api\controllers;

use yii\web\Controller;
use backend\models\User;
use backend\models\AuthAssignment;
use backend\modules\api\components\CustomAuth;
use common\models\Produtos;
use common\models\Categorias;
use frontend\models\SignupForm;
use yii;

/**
 * Default controller for the `api` module
 */
class ProdutoController extends Controller
{
    public $modelClass = 'common\models\Produtos';

    public function behaviors()
    {
        $behaviors = parent::behaviors();
        return $behaviors;
    }

    public function actions()
    {
        $actions = parent::actions();
        //not use
        unset($actions['update']);
        unset($actions['delete']);
        unset($actions['create']);
        //unset to override
        unset($actions['index']);
        unset($actions['view']);
        return $actions;
    }

    protected function verbs()
    {
        $verbs = parent::verbs();
        $verbs =  [
            'index' => ['GET'],
            'view' => ['GET'],
            'search' => ['GET'],
        ];
        return $verbs;
    }

    public function actionIndex()
    {
        $response = [];
        $produtos = Produtos::find()->where(['Ativo' => 1])->select('id, nome, preco')->all();
        foreach ($produtos as $produto) {
            $data = [
                'produto' => $produto,
            ];
            $response[] = $data;
        }
        return $response;
    }

    public function actionView($id)
    {
        $response = [];
        $produto = Produtos::findOne($id);
        if ($produto) {
            $data = [
                'produto' => $produto,
                'quantidade' => $produto->Quantidade,
            ];
            $response[] = $data;
        }
        return $response;
    }

    public function actionSearch()
    {
    }






    public function actionIndex()
    {
        return $this->render('index');
    }
}
