<?php

include_once(ROOT.'/models/Article.php');

class ArticleController
{
    public function actionAddNewArticle()
    {
        
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
            //header('Location: scienceblog/mainpage');
            return header('Location: scienceblog/mainpage');
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

}

?>