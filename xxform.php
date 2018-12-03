<!-- form表单 必填字段 验证字段 电邮 和url -->
<!-- 知识点： -->
  <!--  1. $_SERVER["PHP_SELF"] 变量： 一种超全局变量，它返回当前执行脚本的文件名
        2. htmlspecialchars() 函数？ htmlspecialchars() 函数把特殊字符转换为 HTML 实体。这意味着 < 和 > 之类的 HTML 字符会被替换为 &lt; 和 &gt; 。这样可防止攻击者通过在表单中注入 HTML 或 JavaScript 代码（跨站点脚本攻击）对代码进行利用。
        3. 通过 PHP trim() 函数）去除用户输入数据中不必要的字符（多余的空格、制表符、换行）
        4. 通过 PHP stripslashes() 函数）删除用户输入数据中的反斜杠（\） -->
<html>
<style>
    .error {
        color: red;
    }
</style>
<body>
<?php 
#简单输出
    //     echo "你的输入为:" . "<br>";
    //     echo $_POST["fname"];
    //     echo "<br>";
    //     echo $_POST["email"];
    //     echo "<br>";
    //     echo $_POST["urls"];
    //     echo "<br>";
    //     echo $_POST["comment"];
    //     echo "<br>";
    //     echo $_POST["gender"];
    //     echo "<br>";
    //     echo $_POST["gendera"];
    //     echo "<br>";


#（通过 PHP trim() 函数）去除用户输入数据中不必要的字符（多余的空格、制表符、换行）
# （通过 PHP stripslashes() 函数）删除用户输入数据中的反斜杠（\）
#创建一个检查函数test_input 通过函数检查每个$_POST变量，

    // 定义变量并设置为空值
    // $name = $email = $gender = $comment = $website = "";
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     $name = test_input($_POST["fname"]);
    //     $email = test_input($_POST["email"]);
    //     $gender = test_input($_POST["gender"]);
    //     $comment = test_input($_POST["comment"]);
    //     $website = test_input($_POST["website"]);  
    // }
    // function test_input($data) {
    //     $data = trim($data);   //去除用户输入数据中不必要的字符（空格，制表符，换行）
    //     $data = stripslashes($data); //删除用户数据数据中反斜杠
    //     $data = htmlspecialchars($data); //把特殊字符转换为html实体，可防止攻击者通过在表单中注入html，js代码，对代码利用，通过 PHP 的 htmlspecialchars() 函数传递所有变量。
    //     return $data;
    // }

#验证必须输入字段,验证名字是否包含空格字母 验证email url

    // 判断变量并设置为空值
    $nameErr = $emailErr = $genderErr = $websiteErr = "";
    $name = $email = $gender = $comment = $website = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["fname"])) {
         $nameErr = "必填";
      } else {
         $name = test_input($_POST["fname"]);
         // preg_match() 函数检索字符串的模式，如果模式存在则返回 true，否则返回 false。
         if (!preg_match("/^[a-zA-Z ]*$/",$name)) { //只能字母空格
             $nameErr = "错误"; 
             $name = "";
        }
      }

      if (empty($_POST["email"])) {
        $emailErr = "必填";
      } else {
        $email = test_input($_POST["email"]);
          if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
          $emailErr = "错误"; 
          $email = "";
        }
      }

      if (empty($_POST["urls"])) {
        $websiteErr = "必填";
      } else {
        $website = test_input($_POST["urls"]);
         if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
          $websiteErr = "错误"; 
          $website = "";
            }
          }

      if (empty($_POST["comment"])) {
        $comment = "";
      } else {
        $comment = test_input($_POST["comment"]);
      }

      if (empty($_POST["gender"])) {
        $genderErr = "必填";
      } else {
        $gender = test_input($_POST["gender"]);
      }
    }
    function test_input($data) {
        $data = trim($data);   //去除用户输入数据中不必要的字符（空格，制表符，换行）
        $data = stripslashes($data); //删除用户数据数据中反斜杠
        $data = htmlspecialchars($data); //把特殊字符转换为html实体，可防止攻击者通过在表单中注入html，js代码，对代码利用，通过 PHP 的 htmlspecialchars() 函数传递所有变量。
        return $data;
    }
?>

<!-- html -->

    * 必填字段
    <br>
   <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
    姓名： <input type="text" name="fname" value="<?php echo $name?>">
    <span class="error">*<?php echo $nameErr; ?></span>
    <br><br>
    电邮： <input type="text" name="email" value="<?php echo $email?>">
    <span class="error">*<?php echo $emailErr; ?></span>
    <br><br>
    网址： <input type="text" name="urls" value="<?php echo $website?>">
    <span class="error">*<?php echo $websiteErr; ?></span>
    <br><br>

    评论： <textarea name="comment" id="" cols="30" rows="10"><?php echo $comment;?></textarea>
    <br><br>
    性别： 
        <input type="radio" name="gender"
        <?php if(isset($gender) && $gender=="female") echo "checked";?>
         value="female">男
        <input type="radio" name="gender" 
        <?php if(isset($gender) && $gender=="male") echo "checked";?>
        value="male">女
        <span class="error">*<?php echo $genderErr; ?></span>
        <br><br>
        <input type="submit">
    </form> 
    <?php
            echo "你的输入为:" . "<br>";
            echo $name;
            echo "<br>";
            echo $email;
            echo "<br>";
            echo $gender;
            echo "<br>";
            echo $comment;
            echo "<br>";
            echo $website;
            echo "<br>";
    ?>
</body>
</html>

