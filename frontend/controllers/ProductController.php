<?php

namespace frontend\controllers;

use common\models\Review;
use Yii;
use common\models\Product;
use frontend\models\ProductSearch;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ProductController implements the CRUD actions for Product model.
 */
class ProductController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Product models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProductSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);


    }
    /**
     * Creates a new Product model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreateReview()
    {
        $review = new Review();

        if ($review->load(Yii::$app->request->post()) && $review->save()) {
            return $this->redirect(['view', 'id' => $review->product_id]);
        }

        return $this->render('create', [
            'model' => $review,
        ]);
    }
    /**
     * Displays a single Product model.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);
        $review = new Review();
//        $reviews = $model->reviews;
//        $reviews = Review::find()->andWhere(['product_id'=>$model->id])->all();
        $reviewsDataProvider = new ActiveDataProvider([
            'query' => $model->getReviews(),
            'pagination' => false,
                //for pagination uncomment this, requested issue via git to set 'pagination' => false,[
                //'pageSize' => 1,
            //],
        ]);
        return $this->render('view', [
            'model' => $model,
            'review'=>$review,
            'reviewsDataProvider'=>$reviewsDataProvider,
        ]);
    }

    /**
     * Creates a new Product model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return Product
     */

    protected function findModel($id)
    {
        if (($model = Product::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
