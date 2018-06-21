<?php
include_once(ROOT.'/models/Category.php');

class CategoryController{
    public function actionGetCategory($category){

        //require_once(ROOT.'/views/categories.php');
        var_dump($category);

        
        return $category;
    }

    /*public function actionShowCategory(){

        require_once(ROOT.'/views/categories.php');
        //var_dump($category);
        $showcategory = Category::showCategory();
        var_dump($showcategory);

        
        return $showcategory;
    }*/


}

?>