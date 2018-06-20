<?php

class CategoryController{
    public function actionShowCategories(){

        require_once(ROOT.'/views/categories.php');
        
        return true;
    }
}

?>