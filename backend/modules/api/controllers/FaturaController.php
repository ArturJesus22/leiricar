<?php

namespace backend\modules\api\controllers;

use common\models\Faturas;
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
class FaturaController extends Controller
{
    public $modelClass = 'common\models\Faturas';

    public function behaviors()
    {
        Yii::$app->params['id'] = 0;
        $behaviors = parent::behaviors();
        $behaviors['authenticator'] = [
            'class' => CustomAuth::className(),
        ];
        return $behaviors;
    }

    public function actions()
    {
        $actions = parent::actions();
        //no use
        unset($actions['update']);
        unset($actions['delete']);
        //not sure if need
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
                'index' => ['GET', 'POST', 'HEAD'],
                'view' => ['GET', 'HEAD'],
            ];
            return $verbs;
    }

    public function actionIndex(){
        $faturas = Faturas::findAll(['id_Cliente' => Yii::$app->params['id']]);
        $response = [];
        foreach ($faturas as $fatura) {
            $data = [
                'fatura' => $fatura,
                'linhasFatura' => $fatura->linhafaturas,
            ];
            $response[] = $data;
        }
    }

    public function actionView($id){
        $fatura = Faturas::findOne(['id' => Yii::$app->request->get('id'), 'id_Cliente' => Yii::$app->params['id']]);
        if ($fatura == null) {
            return 'Produto não encontrado';
        }

        $fatura = Faturas::findOne(['id' => $id]);
        $response = [];
        $data = [
            'fatura' => $fatura,
            'linhasFatura' => $fatura->linhafaturas,
        ];
        $response[] = $data;
        return $response;
    }








}
