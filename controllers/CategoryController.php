<?php
include_once(ROOT.'/models/Category.php');

class CategoryController{
    public function actionGetCategory($category){

        $articlesToChoosenCategory = Category::selectArticlesToChoosenCategory($category);

        if(isset($_POST['alpSort']))
        {
            $articlesToChoosenCategory = Category::alpSort($category);
        }

        if(isset($_POST['likeSort']))
        {
            $articlesToChoosenCategory = Category::likesort($category);
        }
        
        return require_once(ROOT.'/views/categories.php');
    }
}

?>