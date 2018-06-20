<?php

include_once(ROOT.'/models/Article.php');

class ArticleController
{
    public function actionShowAllArticles()
    {

        require_once(ROOT.'/views/articles.php');

        $articleAll = Article::getAllArticles();

        var_dump($articleAll);

        echo 'actionView';
        
        return true;
    }

}

?>