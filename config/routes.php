<?php
    return array
    (
        'mainpage' => 'mainpage/showMainpage',

        'articles' => 'article/showAllArticles',

        'category/([a-z]+)' => 'category/getCategory/$1',


    );

?>