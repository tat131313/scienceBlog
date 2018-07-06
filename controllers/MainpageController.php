<?php

include_once(ROOT.'/models/Article.php');

class MainpageController
{
    public function actionShowMainpage()
    {
        $lastFiveArticles = Article::getLastFiveArticles();
        
        $fiveLikeArticles = Article::fiveLikeArticles(); 
        
        return  require_once(ROOT.'/views/main_page.php');
    }

}