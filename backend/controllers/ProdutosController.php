<?php

namespace backend\controllers;

use common\models\Categorias;
use common\models\Ivas;
use common\models\Produtos;
use common\models\Imagens;
use backend\models\ProdutosSearch;
use common\models\UploadForm;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii;

/**
 * ProdutosController implements the CRUD actions for Produtos model.
 */
class ProdutosController extends Controller
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
                    'only' => ['index', 'view', 'create', 'update', 'delete'],
                    'rules' => [
                        [
                            'allow' => true,
                            'actions' => ['index', 'view', 'create', 'update', 'delete'], // Restrinjir o acesso apenas a ação
                            'roles' => ['gerirProdutos'],
                        ],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Produtos models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ProdutosSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        //$modelCat = Categorias::findOne(['ID_Categoria' => $ID_Categoria]);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Produtos model.
     * @param int $ID ID
     * @param int $ID_categoria Id Categoria
     * @param int $id_iva Id Iva
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($ID, $ID_categoria, $id_iva)
    {
        return $this->render('view', [
            'model' => $this->findModel($ID, $ID_categoria, $id_iva),
        ]);
    }

    /**
     * Creates a new Produtos model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Produtos();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'ID' => $model->ID, 'ID_categoria' => $model->ID_categoria, 'id_iva' => $model->id_iva]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }


    public function actionUpload()
    {
        $model = new UploadForm();

        if (Yii::$app->request->isPost) {
            $model->imageFile = UploadedFile::getInstance($model, 'imagem');
            if ($model->upload()) {
                return;
            }
        }
        return $this->goHome();
    }

    /**
     * Updates an existing Produtos model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $ID ID
     * @param int $ID_categoria Id Categoria
     * @param int $id_iva Id Iva
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($ID, $ID_categoria, $id_iva)
    {
        $model = $this->findModel($ID, $ID_categoria, $id_iva);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'ID' => $model->ID, 'ID_categoria' => $model->ID_categoria, 'id_iva' => $model->id_iva]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Produtos model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $ID ID
     * @param int $ID_categoria Id Categoria
     * @param int $id_iva Id Iva
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($ID, $ID_categoria, $id_iva)
    {
        $this->findModel($ID, $ID_categoria, $id_iva)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Produtos model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $ID ID
     * @param int $ID_categoria Id Categoria
     * @param int $id_iva Id Iva
     * @return Produtos the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($ID, $ID_categoria, $id_iva)
    {
        if (($model = Produtos::findOne(['ID' => $ID, 'ID_categoria' => $ID_categoria, 'id_iva' => $id_iva])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
    public function getCategoria()
    {
        return $this->hasOne(Categorias::class, ['ID_categoria' => 'ID_categoria']);
    }

    public function getIva()
    {
        return $this->hasOne(Ivas::class, ['id' => 'id_iva']);
    }
}
