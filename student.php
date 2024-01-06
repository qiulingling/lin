<?php
$servername = "192.168.56.103"; 
$username = "root";       
$password = "Ql091029";           
$dbname = "student";         
 

$conn = new mysqli($servername, $username, $password, $dbname);
 

if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 

if ($_SERVER["REQUEST_METHOD"] == "POST") {  
    $name = $_POST["name"];  
      
    $sql = "select * from students where name = '$name'";  
    $result = $conn->query($sql); 
    if ($result->num_rows > 0) {  
        while($row = $result->fetch_assoc()) {  
        echo "学号: " . $row["id"]. "<br>";
        echo "姓名: " . $row["name"]. "<br>";  
        echo "年龄: " . $row["age"]. "<br>";  
        echo "性别: " . $row["gender"]. "<br>";  
        echo "班级: " . $row["class"]. "<br>";
        echo "<br>";  
    }    
    } else {  
        echo "查询学生信息时出错: " . $conn->error;  
    }  
}  
$conn->close();
?>
