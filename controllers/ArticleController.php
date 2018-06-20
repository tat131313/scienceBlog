<?php

class ArticleController{
    public function actionShowAllArticles(){

        require_once(ROOT.'/views/articles.php');
        
        return true;
    }
}

?>