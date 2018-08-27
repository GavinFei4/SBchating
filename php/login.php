<?php
/**
 * Created by PhpStorm.
 * User: GavinFei
 * Date: 2018/8/20
 * Time: 23:19
 */
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
$sql ="select * from users where `username` = '$username' and `password` = '$password'";
$login = mysqli_query($conn, $sql);
if (mysqli_num_rows($login) > 0) {
    // 输出数据
    return "登陆成功" ;

} else {
    return"登录失败";
}

mysqli_close($conn);