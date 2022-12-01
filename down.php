<?php
//下载统计
$file = $_GET['file'];

$apk = $_GET['apk'];

//增加下载量
if (is_file($file)) {

    $old = file_get_contents($file);

    $new = $old + 1;

    //写入下载量
    file_put_contents($file,$new);

} else {

    //写入下载量
    file_put_contents($file,1);
}

header("Location:$apk"); //跳转下载


?>