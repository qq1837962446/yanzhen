<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/19
 * Time: 11:16
 */
header("content-type:text/html;charset=utf8");
$zhanghao=$_REQUEST["zhanghao"];
$pass=$_REQUEST["pass"];
if($zhanghao=="admin" && $pass=="123456"){
    $mins="登录成功";
    $href="nim.html";
}else{
    $mins="登录失败";
    $href="login.html";
}

include_once "shibai.html";
