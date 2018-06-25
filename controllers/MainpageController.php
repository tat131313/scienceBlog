<?php

include_once(ROOT.'/models/Article.php');

class MainpageController
{
    public function actionShowMainpage()
    {
        $lastFiveArticles = Article::getLastFiveArticles();   
        
        return  require_once(ROOT.'/views/main_page.php');
    }

}