<?php
    return array
    (
        'mainpage' => 'mainpage/showMainpage',

        'category/([a-z]+)' => 'category/getCategory/$1',

        'article/addComment' => 'article/addComment',

        'article/add' => 'article/addNewArticle',

        'article/editarticle/([0-9]+)' => 'article/editArticle/$1',

        'article/edit/([0-9]+)' => 'article/edit/$1',

        'article/([0-9]+)' => 'article/getArticle/$1',
        
        'article' => 'article/show',

        '' => 'mainpage/showMainpage',

    );

?>