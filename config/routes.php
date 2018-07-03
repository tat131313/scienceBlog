<?php
    return array
    (
        'mainpage' => 'mainpage/showMainpage',

        'category/([a-z]+)' => 'category/getCategory/$1',

        'article/addComment' => 'article/addComment',

        'article/add' => 'article/addNewArticle',

        'article/edit' => 'article/edit',

        'article/([a-z]+)' => 'article/getArticle/$1',
        
        'article' => 'article/show',

    );

?>