<?php

namespace frontend\controllers;

use Yii;
use common\models\Article;
use common\models\ArticleCategory;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\Pagination;

class ArticleController extends Controller {

    public function actionView() {
        $this->layout = 'mainPost';
        $model = Article::findOne(['alias' => $_GET['alias']]);
        if (empty($model)) {
            throw new NotFoundHttpException('The requested page does not exist.');
        } else {
            $this->addHits($model);
            return $this->render('view', [
                        'model' => $model,
            ]);
        }
    }

    public function actionNews() {
        $this->layout = 'mainPost';
        $alias = strtoupper(str_replace("-", " ", $_GET['alias']));
        $categori = ArticleCategory::findOne(['name' => $alias]);
//        $model = Article::findAll(['article_category_id' => $categori->id]);
        $query = Article::find()->where('article_category_id = ' . $categori->id)->orderBy('created DESC');
        $pagination = new Pagination([
            'defaultPageSize' => 7,
            'totalCount' => $query->count(),
        ]);
        $model = $query->offset($pagination->offset)->limit($pagination->limit)->all();
        return $this->render('news', [
                    'model' => $model,
                    'pagination' => $pagination
        ]);
    }

    public function actionPromotion() {
        $this->layout = 'mainSingle';
        $model = Article::findAll(['article_category_id' => 26]);
        return $this->render('promotion', [
                    'model' => $model,
        ]);
    }

    public function actionGallery() {
        $this->layout = 'mainSingle';
        $model = Article::findAll(['article_category_id' => 28]);
        return $this->render('gallery', [
                    'model' => $model,
        ]);
    }

    public function actionSahid() {
        $this->layout = 'mainSingle';
        $alias = strtoupper(str_replace("-", " ", $_GET['alias']));
        $categori = ArticleCategory::findOne(['name' => $alias]);
        $model = Article::findAll(['article_category_id' => $categori->id]);
        return $this->render('sahid', [
                    'model' => $model,
                    'group' => $alias,
        ]);
    }

    public function actionFacility() {
        $this->layout = 'mainSingle';
        $alias = strtoupper(str_replace("-", " ", $_GET['alias']));
        $categori = ArticleCategory::findOne(['name' => $alias]);
        $model = Article::findAll(['article_category_id' => $categori->id]);
        return $this->render('facility', [
                    'model' => $model,
                    'group' => $alias,
        ]);
    }

    public function addHits($model) {
        $model->hits++;
        $model->save();
    }

}
