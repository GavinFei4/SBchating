<?php
/**
 * Created by PhpStorm.
 * User: GavinFei
 * Date: 2018/8/13
 * Time: 22:30
 */
$servername = "localhost";
$username = "root";
$password = "123123";
$dbname = "sbchating";

// 创建连接
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("连接失败: " . mysqli_connect_error());
}

$sql =" SELECT id , username,  password FROM users";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // 输出数据
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["username"]. " " . $row["password"]. "<br>";
    }
} else {
    echo "0 结果";
}

mysqli_close($conn);
