<?php

include_once(ROOT.'/models/Article.php');

class ArticleController
{
    public function actionAddNewArticle()
    {

        require_once(ROOT.'/views/articles.php');

        $addNewArticle = Article::addNewArticle();


        
        return true;
    }

}

?>