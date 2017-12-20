<?php
/**
 * Created by PhpStorm.
 * User: andrea
 * Date: 20/12/2017
 * Time: 15:41
 */

$url =$_GET['url'];

echo $url.' -> ';
require 'controllers/'.$url.'.php';
$controller = new $url;




