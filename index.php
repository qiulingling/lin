<!DOCTYPE html>
<html>
<head>
    <title>学生信息管理系统</title>
    <style>  
        .container {  
            display: grid;  
            grid-template-columns: repeat(2, 1fr);  
            grid-gap: 10px;  
        }  
        .box {  
            background-color: #f5f5f5;  
            padding: 20px;  
        }  
    </style>
</head>
<body>
  <div class="container">
   <div class="box"> 
    <h2>查询学生信息</h2>
    <form action="student.php" method="post">
        <label for="name">姓名:</label>
        <input type="text" name="name" id="name" required><br><br>

        <input type="submit" value="查询">
    </form>
   </div>
   <div class="box">  
     <h2>添加学生信息</h2>
    <form action="add_student.php" method="post">
        <label for="name">姓名:</label>
        <input type="text" name="name" id="name" required><br><br>

        <label for="age">年龄:</label>
        <input type="number" name="age" id="age" required><br><br>

        <label for="gender">性别:</label>
        <input type="text" name="gender" id="gender" required><br><br>

        <label for="class">班级:</label>
        <input type="text" name="class" id="class" required><br><br>

        <input type="submit" value="添加">
    </form> 
   </div>  
   <div class="box">  
     <h2>修改学生信息</h2>
    <form action="update_student.php" method="POST">  
        <label for="id">学生ID:</label>  
        <input type="number" name="id" id="id" required><br><br>  
        <label for="name">姓名:</label>  
        <input type="text" name="name" id="name" required><br><br>  
        <label for="age">年龄:</label>  
        <input type="number" name="age" id="age" required><br><br>  
        <label for="gender">性别:</label>
        <input type="text" name="gender" id="gender" required><br><br>

        <label for="class">班级:</label>
        <input type="text" name="class" id="class" required><br><br>
        <input type="submit" value="修改">  
    </form>   
   </div>  
   <div class="box">  
     <h2>删除学生信息</h2>
    <form action="delete_student.php" method="POST">  
        <label for="id">学生ID:</label>  
        <input type="number" name="id" id="id" required><br><br>  
        <label for="name">姓名:</label>  
        <input type="text" name="name" id="name" required><br><br>  
        <input type="submit" value="删除">  
    </form>
   </div>
  </div>  
</body>
</html>
