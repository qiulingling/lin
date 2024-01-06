
<?php  
$servername = "192.168.56.103"; // MySQL服务器地址
$username = "root";       // MySQL用户名
$password = "Ql091029";           // MySQL密码（根据自己设置）
$dbname = "student";         // 要连接的数据库名称

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {  
    die("数据库连接失败: " . $conn->connect_error);  
}  
  
// 处理表单提交的数据  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
    $name = $_POST["name"];  
    $age = $_POST["age"];  
    $gender = $_POST["gender"];  
    $class = $_POST["class"];
  
    // 插入学生信息到数据库中（您需要替换以下 SQL 语句）  
    $sql = "INSERT INTO students (name, age, gender, class) VALUES ('$name', $age, '$gender', '$class')";  
    if ($conn->query($sql) === TRUE) {  
        echo "学生信息添加成功！";  
    } else {  
        echo "添加学生信息时出错: " . $conn->error;  
    }  
}  
  
// 关闭数据库连接  
$conn->close();  
?>
