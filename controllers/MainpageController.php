<?php

include_once(ROOT.'/models/Article.php');

class MainpageController
{
    public function actionShowMainpage()
    {
        $lastFiveArticles = Article::getLastFiveArticles();
        
        
        require_once(ROOT.'/views/main_page.php');
        //require_once(ROOT.'/views/welcome.php');
        return $lastFiveArticles;
    }

}