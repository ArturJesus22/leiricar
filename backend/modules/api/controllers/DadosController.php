<?php

namespace backend\modules\api\controllers;

use common\models\Dados_Clientes;
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
class DadosController extends Controller
{
    public $modelClass = 'common\models\Dados_Clientes';

    public function behaviors()
    {
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
        unset($actions['delete']);
        unset($actions['create']);
        unset($actions['view']);
        //unset to override
        unset($actions['update']);
        unset($actions['index']);
        return $actions;
    }

    protected function verbs()
    {
        $verbs = parent::verbs();
        $verbs =  [
            'index' => ['GET'],
            'update' => ['PUT'],
        ];
        return $verbs;
    }

    public function actionIndex()
    {
        return Dados_Clientes::find()->where(['id_User' => Yii::$app->params['id']])->select('nome, telefone, nif, morada, codPostal')->one();
    }

    public function actionUpdate()
    {
        $model = Dados_Clientes::findOne(['id_User' => Yii::$app->params['id']]);
        $model->load(Yii::$app->getRequest()->getBodyParams(), '');
        if ($model->save()) {
            return ['response' => 'Dados atualizados com sucesso'];
        } else {
            foreach ($model->errors as $error) {
                return ["response" => $error[0]];
            }
        }
    }


}
