<?php

include_once(ROOT.'/models/Article.php');

class ArticleController
{
    public function actionAddNewArticle()
    {
        ob_start();
        
        //var_dump($_POST);

        $articleInfo = array();
        $articleInfo['articleName'] = $_POST['articleName'];
        $articleInfo['autor'] = $_POST['autor'];
        $articleInfo['article'] = $_POST['article'];
        $articleInfo['abstract'] = $_POST['abstract'];

        $article = new ArticleController;
        
        if($article -> validateArticle($articleInfo))
        {
            Article::addNewArticle();  
            return header('Location: /mainpage');
        }
        else
        {
            $e = "Something wrong";
            return require_once(ROOT.'/views/articles.php');
        }
    }

    private function validateArticle($articleInfo)        // check for censured
    {
        $validate = fopen("C:/OSPanel/domains/scienceBlog/validate.txt", "r");
        $validateText = fgets($validate, 999);
        $validateArr = explode(", ", $validateText);

        foreach($articleInfo as $articleatribute)
        {
            for($j=0; $j<count($validateArr); $j++)
            {
                if($articleatribute == $validateArr[$j])
                {
                    return false;
                }
            }
        }
        return true;

    }

    public function actionShow()
    {
        return require_once(ROOT.'/views/articles.php');
    }

    public function actionGetArticle($articleId)
    {
        $chooseArticle = Article::getArticle($articleId);

        $showComments = Article::showAllComments($articleId);

        return require_once(ROOT.'/views/getarticle.php');
    }

    public function actionEdit($articleId)
    {
        $chooseArticle = Article::getArticle($articleId);

        return require_once(ROOT.'/views/editarticle.php');
    }

    public function actionEditArticle($articleId)
    {
        $articleInfo = array();
        $articleInfo['articleName'] = $_POST['articleName'];
        $articleInfo['article'] = $_POST['article'];
        $articleInfo['abstract'] = $_POST['abstract'];

        $article = new ArticleController;
        
        if($article -> validateArticle($articleInfo))
        {
            Article::fixArticle($articleId);
            return require_once(ROOT.'/views/readyedit.php');
        }
        else
        {
            $chooseArticle = Article::getArticle($articleId);
            $e = "Something wrong";
            return require_once(ROOT."/views/editarticle.php");
        }

        
    }

    public function actionAddComment($articleId)
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $comment = $_POST['comment'];

        $nameValid = array();
        $nameValid = explode(" ", $name);

        $nameV = new ArticleController;

        if($name == NULL || $email == NULL || $comment == NULL || !($nameV -> validateArticle($nameValid)))
        {
            $chooseArticle = Article::getArticle($articleId);
            $showComments = Article::showAllComments($articleId);
            $e = "Something wrong";
            return require_once(ROOT.'/views/getarticle.php');
        }

        /*
        if($name)
        {
            $nameValid = array();
            $nameValid = explode(" ", $name);

            $nameV = new ArticleController;
        
            if($nameV -> validateArticle($nameValid))
            {
                if($email)
                {
                    if($comment)
                    {

                        //Article::addNewComment($articleId, $com);
                        Article::addNewComment($articleId);

                        //return header('Location: /mainpage');

                    }
                    else
                    {
                        $e = "Something wrong";
                        return $e;
                        //return require_once(ROOT.'/views/articles.php');
                    }
                }
                else
                {
                    $e = "Something wrong";
                    return $e;
                    //return require_once(ROOT.'/views/articles.php');
                }
            }
            else
            {
                $e = "Something wrong";
                return $e;
                //return require_once(ROOT.'/views/articles.php');
            }
        }
        else
        {
            $e = "Something wrong";
            echo $e;
            //return header("Location: /article/$articleId");
            //require_once(ROOT.'/views/script.php');
        }*/
    }

    private function validateComment($comment)        // check for censured
    {
        $validate = fopen("C:/OSPanel/domains/scienceBlog/validate.txt", "r");
        $validateText = fgets($validate, 999);
        $validateArr = explode(", ", $validateText);

        
        for($j=0; $j<count($validateArr); $j++)
        {
            $pos = strpos($comment, $validateArr[$j]);
            while($pos === true)
            {
                echo $pos;
            }
        }
        
        return $comment;

    }

}

?>