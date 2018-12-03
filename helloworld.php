<!-- 作用域
    全局变量
    局部变量
    static静态 -->
<html>
<body>
<!-- action 等于helloworld.php -->
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Name: <input type="text" name="fname">
<input type="submit">
<!-- <a href="helloworld.php?subject=PHP&web=helloworldfff.com">测试 $GET</a> -->
</form>


<!-- 表单处代码 -->
<!-- <form action="helloworld.php" method="post">
    Name: 
        <input type="text" name="name">
        <br>
    E-mail: 
        <input type="number" name="email">
        <br>
</form> -->

<?php
        // $x = 9;
        // $y = 10;
        //     // echo "helloworld.php";
        //     function mytest() {
        //         // global 刚在前面先获得全局的 再赋值
        //         // global $x,$y;
        //         $x = 19;
        //         $y = 10;
        //         // global 刚在前后面先声明局部变量 再获取全局
        //         global $x,$y;
        //         $y = $x + $y;
        //         echo $y;
        //         echo "<br>";
        //         echo $GLOBALS['x'],输出globals里面的x;
        //         echo "<br>";
        //         echo $GLOBALS['y'],输出globals里面的y;
        //         echo "<br>";
        //     }
        //     mytest();
        //     echo $y;


     
// 静态static
        // $arryx = array("韩柏","张三","里的水");
        // function myTest2 () {
        //     // global $arryx;
        //     static $x = 1;
        //     echo $x;
        //     echo "<br>";
        //     echo "第 $x 次";
        //     $x++;
        //     echo "<br>";
        //     echo "输出数组了 {$arryx[1]}";
        //     echo "<br>";
        // }
        // myTest2();
        // myTest2();
        // // myTest2();
        // echo "输出数组2呀 {$arryx[0]}";
  


// 整数可以用三种格式规定整数：十进制、十六进制（前缀是 0x）或八进制（前缀是 0）
// var_dump() 可返回变量的数据类型和值
      

        // $x1 = 2001;
        // var_dump($x1);
        // echo "<br>";
        //  $x2 = 200.262;
        // var_dump($x2);
        // echo "<br>";
        //  $x3 = -202;
        // var_dump($x3);
        // echo "<br>";

        // $x = 0x8C; // 十六进制数
        // var_dump($x);
        // echo "<br>";
        // $x = 047; // 八进制数
        // var_dump($x);

        // $x = 2.4e3;
        // var_dump($x);
        // echo "<br>"; 

        // echo "<br>"; 
        // $x = 8E-5;
        // var_dump($x);

        // echo "<br>"; 
        // $cars=array("Volvo","BMW","SAAB");
        // var_dump($cars);
        // echo "<br>"; 
        // $x=null;
        // var_dump($x);
    
####### php对象
 
        // 对象是存储数据和有关如何处理数据的信息的数据类型。
        // 在 PHP 中，必须明确地声明对象。
        // 首先我们必须声明对象的类。对此，我们使用 class 关键词。类是包含属性和方法的结构。
        // 然后我们在对象类中定义数据类型，然后在该类的实例中使用此数据类型：

        // class Car 
        // {
        //         var $color;
        //         function Car($color="grren") {
        //             $this->color = $color;
        //         }
        //         function what_color () {
        //             return $this->color;
        //         }
        // }
        
        #strlen() 函数，返回字符串长度 以字符计 包括空格
        // echo strlen("Hello world!");

        # strpos（）函数 用于检索字符串内指定的字符或文本,只能查找出第一个
        // echo strpos('hello world!','world');
        

#问题
#判断某个字符串里是否包括world
        // $x = 'hello world';
        // $value = strpos($x, 'worlld');
        // echo $value;
        // if ($value != null) {
        //     echo "有world";
        // }else {
        //     echo "没有";
        // }



####### php 常量 define( )
        // 常量是单个值得标识符（名称）在脚本中无法改变该值
        // 有效的常量名以字符或下划线开头（前没有 $ 符号）
        // 注释： 与变量不同，常量贯穿整个脚本是自动全局的
                // 名称         常量值          是否对大小写不敏感
            // define ("CONSTANT","hello learn php",true);
            // echo constant;




####### 字符串运算符
            # . 串接
            # .= 串接赋值
        // $a = "hello";
        // $b = $a . " world!";
        // $c = "$a world!";
        // echo $b;
        // echo "<br/>";
        // echo $c;

        // $x="hello";
        // $x .= " world!";
        // echo "<br/>";
        // echo $x;

        
        // 递增 递减
        // $x=10; 
        // echo ++$x; // 输出 11

        // $y=10; 
        // echo $y++; // 输出 10

        // $z=5;
        // echo --$z; // 输出 4

        // $i=5;
        // echo $i--; // 输出 5
        

        // echo date("H:i") //当前时间几点几分

####### switch 语句
        // switch ($x)
        // {
        // case 1:
        //   echo "Number 1";
        //   break;
        // case 2:
        //   echo "Number 2";
        //   break;
        // case 3:
        //   echo "Number 3";
        //   break;
        // default:
        //   echo "No number between 1 and 3";
        // }


####### PHP循环
// 只要指定条件为真，则循环代码块
        // $x = 10;
        // $colors = array("red","green","blue","yellow"); 
        // while ($x <=13){
        //      echo "第" . $x . "次";
        //        echo "<br>";  
        //      $x++;

        // }
// 只要指定条件为真，则循环代码块
        // do {
        //     echo "第" . $x . "次";
        //     echo "<br>"; 
        //     $x++;
        // }while ($x <= 13);

// 循环代码块指定次数
        // for ($x=0; $x<=10; $x++) {
        //   echo "数字是：$x <br>";
        // }
        
// 遍历数组中的每个元素并循环代码块
        // foreach ($colors as $value) {
        //   echo "$value <br>";
        // }  
                  



####### 函数
            // function learnFuc() {
            //     echo " <h2> 这是一个func <h2>";
            // }
            // learnFuc();
 // 函数参数
 // 可以通过参数向函数传递信息，参数类似变量；多个参数用逗号隔开即可；
            // function paramFunc ($params,$abs) {
            //     echo "我是 $params 参数 $abs";
            //     echo "<br>";
            // }
            // paramFunc('bbb',655);
            // paramFunc('aaa',321);
            // paramFunc('ccc',658);
            // paramFunc('ddd',659);
// 默认参数值
            //  function paramFunc ($params,$abs=200000) {
            //     echo "我是 $params 参数 $abs";
            //     echo "<br>";
            // }
            // paramFunc('bbb');
            // paramFunc('aaa',321);
            // paramFunc('ccc',658);
            // paramFunc('ddd',659);
// 返回值
      //   $z; // 默认空 相加等于0
      //   $x = 10;
      //   $y = 11; 
      //   function sum( $x, $y) {
      //       global $z;
      //       global $x;
      //       global $y;
      //        $z = $x + $y;
      //       return $z;
      //   }
      //   // sum(5,10);
      //   // echo $z;
      // $xl = sum(15,16);
      // echo $x; 
      // echo "<br>";
      // echo $y;
      // echo "<br>";
      // echo $x . "+" . $y . "=" . $xl . "<br>";
// 正确返回值
     // function sum( $x, $y) {
     //         $z = $x + $y;
     //        return $z;
     //    }
     //    $x = 10;
     //    $y = 11;
     //    echo $x . "+" . $y . "=" . sum($x,$y) . "<br>";
     

#######数组
     // $age = array("hanlj"=>"24","ejfd"=>"25","dfd"=>"56");
// 索引数组
        // $cars = array();
        // $cars[0]="Volvo"; //创建数组
        // $cars[1]="BMW";
        // $cars[2]="SAAB";
        // echo $cars;
        // echo "<br>";
        // echo var_dump($cars); //返回类型和值
        // echo "<br>";
        // echo count($cars); //返回数组长度
        // echo "<br>";
        // $carslength = count($cars);
        //  for($x=0;$x<=$carslength;$x++) {
        //     echo $cars[$x];
        //     echo "<br>";
        // };
        

// 关联数组 - 使用您分配给数组的制定键的数组
        // echo "hanlj is " . $age['hanlj'] . " years old."
        
    //遍历关联数组
        // foreach ($age as $x1 => $x_value1) {
        //     echo "key=" . $x1 . ' age value=' . $x_value1;
        //     echo "<br>";
        // }
//多维数组 在高级中讲解；


#### 数组排序
    // 对数组进行按升序对数组排序 --- sort(); 
         // $carsg=array("Volvo2","BM3W","SA3AB");
         // sort($carsg); //数组本身就不能二次赋值
         // // echo var_dump(sort($carsg));
         // for ($i=0; $i < count($carsg) ; $i++) { 
         //     echo $carsg[$i];
         //     echo "<br>";
         // }
         // echo "<br>";
    // 对数组进行按降序对数组排序 --- rsort(); 
         // $cars=array("Volvo","BMW","SAAB");
         //  rsort($cars);
         //  foreach ($cars as $key) {
         //      echo $key;
         //      echo "<br>";
         //  }
         // echo "<br>";
    //根据值对数组进行升序排序 --- asort();
         // $age = array("baill0" => "25","afdfsaaa" => "85","dfdfd" => "52");
         //  asort($age);
         // echo "<br>";
    //根据键对数组进行升序  --- ksort()
         // $age = array("baill0" => "25","afdfsaaa" => "85","dfdfd" => "52");
         //  ksort($age);
         //  foreach ($age as $key => $value) {
         //      echo "$key";
         //      echo "<br>";
         //  }
         // echo "<br>";
    //根据值对数组进行降序排序 --- arsort();
         // $age = array("baill0" => "25","afdfsaaa" => "85","dfdfd" => "52");
         //  arsort($age);
         //  foreach ($age as $key => $value) {
         //      echo $value;
         //      echo "<br>";
         //  }
         // echo "<br>";
    //根据键对数组进行降序  --- krsort()
         // $age = array("baill0" => "25","afdfsaaa" => "85","dfdfd" => "52");
         //  krsort($age);
         //  foreach ($age as $key => $value) {
         //      echo $key;
         //      echo "<br>";
         //  }
         // echo "<br>";
         
######## 超全局
    // $GLOBALS ---引用全局作用域中可用的全部变量 （上面有用过）
            // $x = 20;
            // $y = 35;
            // function globals() {
            //     //本身在局部不能范文全局变量
            //     $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
            // }
            // globals();
            // echo $x . "+" . $y . "=" .$z;

    // $_SERVER 保存报头，路径和脚本位置的信息；
            // echo $_SERVER['PHP_SELF']; //返回当前执行脚本的文件名；
            // echo "<br>";
            // echo $_SERVER['SERVER_ADDR'];//返回当前运行脚本所在的服务器的IP地址
            // echo "<br>";
            // echo $_SERVER['HTTP_HOST']; //返回来自当前请求的host头
            // echo "<br>";
            // echo $_SERVER['HTTPS']; //是否通过安全HTTP协议查询脚本
            // echo "<br>";
            // echo $_SERVER['SERVER_PORT'];//Web 服务器使用的端口。默认值为 “80”。
            // echo "<br>";
            // echo $_SERVER['SCRIPT_NAME']; //当前脚本的路径
            // echo "<br>";

            // echo "还有很多";

    // $_REQUEST  -- 用于收集HTML表单提交的数据
            // 注意表单
            // $name = $_REQUEST['fname'];
            // echo $name;
            

    // $_POST  -- 广泛用于收集提交 method="post"的html 表单后的表单数据。$_POST也常用于传递变量
            $name = $_POST['fname'];
            echo $name;
            

    // $_GET ---- 也可以用于收集提交HTML表单（“method = get”） 之后的表单数据。
    // $_GET 也可以收集 URL中发送的数据
           // echo "Study " . $_GET['subject'] . " at " . $_GET['web'];



####### 表单 --- $GET 和  $POST 用于收集表单数据（form-data)
    // echo "welcome " . $_POST["name"];
    // echo "<br>";
    // echo "your email address is " . $_POST["email"];
    

    //表单验证-- 安全处理表单
    
            
?> 
</body>
</html>
  