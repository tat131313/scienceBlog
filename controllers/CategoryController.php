<?php
include_once(ROOT.'/models/Category.php');

class CategoryController{
    public function actionGetCategory($category){

        //require_once(ROOT.'/views/categories.php');
        var_dump($category);

        $articlesToChoosenCategory = Category::selectArticlesToChoosenCategory($category);
        var_dump($articlesToChoosenCategory);

        
        return $articlesToChoosenCategory;
    }
}

?>