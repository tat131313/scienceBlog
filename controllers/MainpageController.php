<?php

//include_once ROOT.'/models/News.php';

class MainpageController{
    public function actionShowMainpage(){

        require_once(ROOT.'/views/main_page.php');
        
        return true;
    }
    /*public function actionView($id){
        if($id){
            $newsItem = News::getNewsItemById($id);

            echo '<pre>';
            print_r($newsItem);
            echo '</pre>';

            echo 'actionView';
        }
        return true;
    }*/
}