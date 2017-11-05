<?php
/**
 * Created by PhpStorm.
 * User: kure
 * Date: 11/4/17
 * Time: 5:55 PM
 */

namespace Kuredev;
//require 'vendor/autoload.php';

class Qiita extends \wrapi\wrapi {
    const BASEURL = "https://qiita.com/api/v2/";
    public function __construct(string $accessToken){
        $opts = array(
            "headers" => array(
                "Authorization" => "Bearer ".$accessToken,
                "Content-Type" => "application/json"
            )
        );

        $json = file_get_contents(__DIR__ . "/api.json");
        $endpoints = json_decode($json, true);
        //var_dump($endpoints);
        parent::__construct(self::BASEURL, $endpoints, $opts);
    }
}
