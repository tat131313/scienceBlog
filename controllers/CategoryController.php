<?php
include_once(ROOT.'/models/Category.php');

class CategoryController{
    public function actionGetCategory($category){

        $articlesToChoosenCategory = Category::selectArticlesToChoosenCategory($category);
        
        return require_once(ROOT.'/views/categories.php');
    }
}

?>