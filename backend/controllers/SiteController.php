<?php

namespace backend\controllers;

use common\models\LoginForm;
use Yii;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['index', 'colaborador', 'funcionario','produtos','vendas','limpezas','comentarios','contactos'], // ações para restringir, Adicinei logout para caso ele por algum motiva consiga entrar, não ficar bloqueado dentro do site logado.
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['login', 'error', 'logout'],
                    ],
                    [
                        'allow' => true,
                        'actions' => ['index'], // Restrinjir o acesso apenas a ação
                        'roles' => ['gerirClientes'],
                    ],
                    [
                        'allow' => true,
                        'actions' => ['colaborador'], // Restrinjir o acesso apenas a ação
                        'roles' => ['gerirColaboradores'],
                    ],
                    [
                        'allow' => true,
                        'actions' => ['funcionario'], // Restrinjir o acesso apenas a ação
                        'roles' => ['gerirClientes'],
                    ],
                    [
                        'allow' => true,
                        'actions' => ['produtos'], // Restrinjir o acesso apenas a ação
                        'roles' => ['gerirProdutos'],
                    ],
                    [
                        'allow' => true,
                        'actions' => ['vendas'], // Restrinjir o acesso apenas a ação
                        'roles' => ['gerirProdutos'],
                    ],
                    [
                        'allow' => true,
                        'actions' => ['limpezas'], // Restrinjir o acesso apenas a ação
                        'roles' => ['gerirLimpezas'],
                    ],
                    [
                        'allow' => true,
                        'actions' => ['comentarios'], // Restrinjir o acesso apenas a ação
                        'roles' => ['gerirComentarios'],
                    ],
                    [
                        'allow' => true,
                        'actions' => ['contactos'], // Restrinjir o acesso apenas a ação
                        'roles' => ['gerirClientes'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }


    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => \yii\web\ErrorAction::class,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return string|Response
     */
    public function actionLogin()
    {

        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $this->layout = 'blank';

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            if (Yii::$app->user->can('admin') || Yii::$app->user->can('funcionario')) {
                return $this->goHome();
            }
            else{
                Yii::$app->user->logout();
                Yii::$app->session->setFlash('error', 'Você não tem permissão para acessar a esta área.');
                return $this->refresh();
            }
        }
        $model->password = '';

        return $this->render('login', [
           'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionColaborador()
    {
        return $this->render('admin');
    }
    public function actionFuncionario()
    {
        return $this->render('funcionario');
    }
    public function actionProdutos()
    {
        return $this->render('produtos');
    }
    public function actionLimpezas()
    {
        return $this->render('limpezas');
    }
    public function actionComentarios()
    {
        return $this->render('comentarios');
    }
    public function actionContactos()
    {
        return $this->render('contactos');
    }
    public function actionVendas()
    {
        return $this->render('vendas');
    }
}
