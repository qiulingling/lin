<?php  
// 连接到数据库（这里假设使用MySQL）  
$servername = "192.168.56.103";  // 数据库服务器地址  
$username = "root";      // 数据库用户名  
$password = "Ql091029";       // 数据库密码  
$dbname = "student";       // 数据库名称  
  
$conn = new mysqli($servername, $username, $password, $dbname);  
if ($conn->connect_error) {  
    die("连接失败: " . $conn->connect_error);  
}  
  
// 检查是否有POST请求发送到该页面，并获取学生ID和信息字段的值  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
    $id = $_POST["id"];  
    $name = $_POST["name"];  
    $age = $_POST["age"];  
    $gender = $_POST["gender"];
    $class = $_POST["class"];
    // 添加其他学生信息字段的获取代码...  
      
   
    $sql = "SELECT * FROM students WHERE id = $id AND name = '$name'";  
    $result = $conn->query($sql);  
    if ($result->num_rows > 0) {  
        // 更新学生信息到数据库中  
        $sql = "UPDATE students SET  age=$age, gender='$gender', class='$class' WHERE id=$id AND name = '$name'";  // 根据实际情况调整SQL语句和字段名  
        if ($conn->query($sql) === TRUE) {  
            echo "学生信息更新成功！";  
        } else {  
            echo "更新失败: " . $conn->error;  
        }  
    } else {  
        echo "找不到指定ID和姓名的学生！";  
    }  
} else {  
    echo "无效的请求！";  // 或者重定向到错误页面或提示信息页面等处理方式...  
}  
$conn->close();  // 关闭数据库连接  
?>
