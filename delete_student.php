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
  

if ($_SERVER["REQUEST_METHOD"] == "POST") {  
    $id = $_POST["id"];  
    $name = $_POST["name"];  
      
    
    $sql = "SELECT * FROM students WHERE id = $id AND name = '$name'";  // 这里假设学生表名为students，且ID为整数类型，姓名是字符串类型  
    $result = $conn->query($sql);  
    if ($result->num_rows > 0) {  
        // 删除学生信息从数据库中  
        $sql = "DELETE FROM students WHERE id = $id AND name = '$name'";  // 根据实际情况调整SQL语句和字段名  
        if ($conn->query($sql) === TRUE) {  
            echo "学生信息删除成功！";  
        } else {  
            echo "删除失败: " . $conn->error;  
        }  
    } else {  
        echo "找不到指定ID和姓名的学生！";  
    }  
} else {  
    echo "无效的请求！";  // 或者重定向到错误页面或提示信息页面等处理方式...  
}  
$conn->close();  // 关闭数据库连接  
?>
