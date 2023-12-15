<?php

namespace backend\modules\api\controllers;

use common\models\Dados_Clientes;
use common\models\User;
use yii\filters\auth\HttpBasicAuth;
use Yii;
use yii\rest\ActiveController;

class BaseController extends ActiveController
{
    public $modelClass = '';

    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['contentNegotiator']['formats']['text/html'] = \yii\web\Response::FORMAT_JSON;
        return $behaviors;
    }

    public function actions()
    {
        $actions = parent::actions();
        //no use
        unset($actions['index']);
        unset($actions['update']);
        unset($actions['delete']);
        unset($actions['view']);
        unset($actions['create']);
        return $actions;
    }

    public function actionError()
    {
        $exception = Yii::$app->errorHandler->exception;
        if ($exception !== null) {
            return [
                'response' => 'Endpoint não foi encontrado',
            ];
        }
    }

}
