<?php

include_once(ROOT.'/models/Article.php');

class MainpageController
{
    public function actionShowMainpage()
    {
        require_once(ROOT.'/views/main_page.php');

        $lastFiveArticles = Article::getLastFiveArticles();
        
        return $lastFiveArticles;
    }

}