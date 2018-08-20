<?php
/**
 * Created by PhpStorm.
 * User: GavinFei
 * Date: 2018/8/13
 * Time: 21:18
 */
//获取页面信息
$username=$_POST["username"];
$password=$_POST["password"];

//连接数据库的参数
$db_servername = "localhost";
$db_username = "root";
$db_password = "123123";
$db_name="sbchating";
//创建数据库的连接
$conn = mysqli_connect($db_servername, $db_username, $db_password, $db_name);
// 检测连接
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//
$sql = "INSERT INTO users (username, password) VALUES ('$username','$password')";

if (mysqli_query($conn, $sql)) {
    echo "新记录插入成功";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);