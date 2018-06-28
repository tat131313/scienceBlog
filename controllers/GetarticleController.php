<?php
include_once(ROOT.'/models/Getarticle.php');

class GetarticleController
{
    public function actionGetArticle($articleName){
        echo $articleName;
        $chooseArticle = Getarticle::getArticle($articleName);

        var_dump($chooseArticle);
        //return require_once(ROOT.'/views/getarticle.php');
    }
}

?>