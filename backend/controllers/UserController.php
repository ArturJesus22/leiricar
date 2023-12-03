<?php

namespace backend\controllers;

use backend\models\User;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\models\AuthAssignment;
use Yii;

/**
 * UserController implements the CRUD actions for User model.
 */
class UserController extends Controller
{

    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
                'access' => [
                    'class' => AccessControl::class,
                    'only' => ['index', 'view', 'create', 'update', 'delete'], // ações para restringir, Adicinei logout para caso ele por algum motiva consiga entrar, não ficar bloqueado dentro do site logado.
                    'rules' => [
                        [
                            'allow' => true,
                            'actions' => ['index', 'view', 'create', 'update', 'delete'], // Restrinjir o acesso apenas a ação
                            'roles' => ['gerirColaboradores'],
                        ],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all User models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $authAssignments = AuthAssignment::find()->all();

        $userIdsWithRoles = AuthAssignment::find()
            ->select('user_id')
            ->where(['in', 'item_name', ['admin', 'funcionario']])
            ->column();

        $dataProvider = new ActiveDataProvider([
            'query' => User::find()->where(['id' => $userIdsWithRoles])
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'id' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'authAssignments' => $authAssignments,
        ]);
    }

    /**
     * Displays a single User model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new User model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new User();

        if ($model->load(\Yii::$app->request->post()) && $model->save()) {
            // Atribui a função ao utilizador baseado no valor do campo 'role'
            $auth = \Yii::$app->authManager;
            $role = $auth->getRole($model->role);
            $auth->assign($role, $model->id);


            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing User model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $authAssignments = AuthAssignment::find()
            ->where(['user_id' => $id])
            ->all();

        $userRoles = [];
        foreach ($authAssignments as $assignment) {
            $userRoles[] = $assignment->item_name;
        }

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            if ($model->isAttributeChanged('role')) {
                    foreach ($authAssignments as $assignment) {
                        Yii::$app->authManager->revoke($assignment->item_name, $model->id);
                    }
                    $auth = Yii::$app->authManager;
                    $role = $auth->getRole($model->role);
                    $auth->assign($role, $model->id);
            }
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
            'userRoles' => $userRoles,
        ]);
    }

    /**
     * Deletes an existing User model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = User::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function getAssignments()
    {
        return $this->hasMany(AuthAssignment::class, ['user_id' => 'id']);
    }
}
