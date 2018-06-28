<?php
    return array
    (
        'mainpage' => 'mainpage/showMainpage',

        'category/([a-z]+)' => 'category/getCategory/$1',

        'article/add' => 'article/addNewArticle',

        'article' => 'article/show',

        'getarticle/([a-z]+)' => 'getarticle/getArticle/$1',


    );

?>