<?php

include_once(ROOT.'/models/Article.php');

class ArticleController
{
    public function actionAddNewArticle()
    {
        
        var_dump($_POST);

        $array = array();
        $array[0] = $_POST['articleName'];
        $array[1] = $_POST['autor'];
        $array[2] = $_POST['article'];
        $array[3] = $_POST['abstract'];

        $article = new ArticleController;
        
        $article -> validateArticle($array);
        
        if($article == true)
        {
            echo "if";
            Article::addNewArticle();
            //header('Location: scienceblog/mainpage');
            return require_once(ROOT.'/views/articles.php');
        }
        else
        {
            echo "else";
            $e = "Something wrong";
            return require_once(ROOT.'/views/articles.php');
        }
    }

    private function validateArticle($array)        // check for censured
    {
        $validate = fopen("C:\OSPanel\domains\scienceBlog/validate.txt", "r");
        $validateText = fgets($validate, 999);
        $validateArr = explode(", ", $validateText);

        echo "<br>";
        var_dump($validateArr);

        echo "<br>";
        var_dump($array);

        $bool = true;;

        for($i=0; $i<=count($array); $i++)
        {
            for($j=0; $j<=count($validateArr); $j++)
            {
                if($array[$i] == $validateArr[$j])
                {
                    $bool = false;
                }
            }
        }
        
        return $bool;
    }

    public function actionShow()
    {
        return require_once(ROOT.'/views/articles.php');
    }

}

?>