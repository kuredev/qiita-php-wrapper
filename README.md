# Description

PHP Wrapper for Qiita APIv2

# Requirement

palanik/wrapi: "*",    
php: ">=7.0.0"

# Usage

```
<?php
require 'vendor/autoload.php';
$accessToken = "xxxxxxxxxxxxxx";

try{
    $qiita = new \Kuredev\Qiita($accessToken);

    //sample code
    var_dump($qiita->get->users());
    $arr = array();
    var_dump($qiita->put->userFollowing("kure", json_encode($arr)));
    var_dump($qiita->get->tagsItem("api"));
    $comment = array("body" => "testtest2");
    var_dump($qiita->post->comment("xxxxx", json_encode($comment)));
}catch(Exception $e){
    var_dump($e->getMessage());
}

```

# Reference

See src/api.json

# License
MIT


