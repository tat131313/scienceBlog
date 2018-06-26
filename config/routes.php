<?php
    return array
    (
        'mainpage' => 'mainpage/showMainpage',

        'article' => 'article/addNewArticle',

        'category/([a-z]+)' => 'category/getCategory/$1',


    );

?>