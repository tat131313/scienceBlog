<?php

/*class Category
{

    public static function showCategory()
    {
        require_once(ROOT.'/controllers/CategoryController');
        $category = CategoryController::actionGetCategory();

        $db = db::getConnection();

        $showcategory = array();

        $result = $db->query("SELECT `id`, `autor`, `date`, `abstract`, `category` FROM `articles` WHERE `category` = '$category'");
        $i = 0;
        while($row = $result->fetch())
        {
            $showcategory[$i]['id'] = $row['id'];
            $showcategory[$i]['autor'] = $row['autor'];
            $showcategory[$i]['date'] = $row['date'];
            $showcategory[$i]['abstract'] = $row['abstract'];
            $i++;
        }

        return $showcategory;
    }
}*/
?>