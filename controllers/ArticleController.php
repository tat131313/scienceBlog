<?php

include_once(ROOT.'/models/Article.php');

class ArticleController
{
    public function actionAddNewArticle()
    {
        
        var_dump($_POST);

        $article = new ArticleController;
        
        $article -> validateArticle("5");
        
        if($article === true)
        {
            echo "if";
            require_once(ROOT.'/models/Article.php');
            Article::addNewArticle();
            return header("Location: /mainpage"); 
        }
        else
        {
            echo "else";
            $e = "Something wrong";
            return require_once(ROOT.'/views/articles.php');
        }

        
        
    }

    private function validateArticle($array)
    {
        return false;
    }

    public function actionShow()
    {
        return require_once(ROOT.'/views/articles.php');
    }

}

?>