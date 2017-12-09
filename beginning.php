<!DOCTYPE html>
<html>
<body>
<h1>PHP语法学习</h1>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Name: <input type="text" name="fname">
<input type="submit">
</form>

<?php
date_default_timezone_set('prc');
	/*Created on 2016年3月8日 */
	 
	 //在 PHP 中，有两种基本的输出方法：echo 和 print。
	 //   echo 和 print 之间的差异：
	 //   echo - 能够输出一个以上的字符串
	 //   print - 只能输出一个字符串，并始终返回 1
	 //   提示：echo 比 print 稍快，因为它不返回任何值。
     echo date('Y-m-d H:i:s',time());  //2016-03-23 06:08:31
	 echo "<br>";
	 echo time();
	 echo "<br>0，在 PHP 中，有两种基本的输出方法：echo 和 print。<br>";
	 print " Hello world!<br>";
	 echo "<h2>PHP 很有趣！</h2>";
	 echo "这段话", "由", "多个", "字符串", "串接而成。";  //echo 还可以酱(类似shell命令)
	 echo "<br>0，echo命令来显示字符串和变量 <br>";
	 $txt1="Learn PHP";
	 $txt2="W3School.com.cn";
	 $cars=array("Volvo","BMW","SAAB");
	 echo $txt1;
	 echo "<br>";
	 echo "Study PHP at $txt2<br>";
	 echo "My car is a {$cars[0]}";
	 
	 //local（局部）global（全局）sstatic（静态）
	 echo "<br><br><h4>1，关于 local（局部）global（全局）sstatic（静态）的测试</h4>";
	 echo "<h6>* php的变量定义，以 $ 符号开头，其后是变量的名称</h6>";
	 $x=5;
	 function myT(){
		 $y=10;
		 echo "<p>测试函数内部的变量：</p>";
		 echo "变量 x 是：$x";
		 echo "<br>";
		 echo "变量 y 是：$y";
	 }
	 myT();
	 echo "<p>测试函数之外的变量：</p>";
	 echo "变量 x 是：$x";
	 echo "<br>";
	 echo "变量 y 是：$x ";
	 
	 
	 //PHP 同时在名为 $GLOBALS[index] 的数组中存储了所有的全局变量。下标存有变量名。这个数组在函数内也可以访问，并能够用于直接更新全局变量。
	 echo "<br><br><br>2，关于 \$GLOBALS[index] 的数组中存储了所有的全局变量的测试<br>";
	 $x=5;
	 $y=10;
	 function testGlobalsArray() {
	   $GLOBALS['y']=$GLOBALS['x']+$GLOBALS['y'];
	 }
	 testGlobalsArray();
	 echo $y; // 输出 15
	 
	 
	 
	 //通常，当函数完成/执行后，会删除所有变量。不过，有时我需要不删除某个局部变量。实现这一点需要更进一步的工作。要完成这一点，请在您首次声明变量时使用 static 关键词：
	 //静态变量仅在局部函数域中存在且只被初始化一次,当程序执行离开此作用域时，其值不会消失,会使用上次执行的结果。
	 echo "<br><br><br>3，关于static 关键词的测试<br>";
	 function testStatic() {
	  static $x=0;     //
	  //$x=0;             
	  echo $x;
	  $x++;
	 }
	 testStatic();
	 echo "<br>";
	 testStatic();
	 echo "<br>";
	 testStatic();
	 
	 echo "<br><br><br>3，关于static 关键词的递归应用场合测试<br>";
	 function Test(){ 
	   static $count = 0; 
	   $count++; 
	   echo $count; 
	   echo "----<br>"; 
	   if ($count < 5) { 
		 Test(); 
	   } 
	   $count--; 
	   echo $count; 
	   echo "====<br>"; 
	 } 
	 Test();

	 
	 echo "<br><br><h4>4，PHP数据类型： 字符串、整数、浮点数、逻辑、数组、对象、NULL。</h4>";
	 echo "<h5>* PHP var_dump() 会返回变量的数据类型和值：</h5>";
	 echo "<h6>PHP 整数<h6>";
	 $x = 645534;
	 var_dump($x);
	 $x = -345; // 负数
	 var_dump($x); 
	 $x = 0x8C; // 十六进制数
	 var_dump($x);
	 $x = 047; // 八进制数
	 var_dump($x);
	 echo "<h6>PHP 浮点数<h6>";
	 $x = 10.365;
	 var_dump($x);
	 $x = 2.4e3;
	 var_dump($x);
	 $x = 8E-5;
	 var_dump($x);
	 echo "<h6>PHP 数组<h6>";
	 $cars=array("Volvo","BMW","SAAB");
	 var_dump($cars);
	 echo "<h6>PHP 对象<h6>";
	 class Car{
	  var $color;
	  function Car($color="green") {
		$this->color = $color;
	  }
	  function what_color() {
		return $this->color;
	  }
	 }
	 function print_vars($obj){
		 foreach(get_object_vars($obj) as $prop => $val){
			 echo "\t$prop = $val\n";
		 }
	 }
	 // instantiate one object
	 $herbie = new Car();

	 // show herbie properties
	 echo "\herbie: Properties\n";
	 print_vars($herbie);
	 echo "<h6>PHP NULL 值: 特殊的 NULL 值表示变量无值。NULL 是数据类型 NULL 唯一可能的值。NULL 值标示变量是否为空。也用于区分空字符串与空值数据库。可以通过把值设置为 NULL，将变量清空<h6>";
	 $x="Hello world!";
	 $x=null;
	 var_dump($x);
 
 
	 echo "<br><br><h4>5，PHP 字符串函数（http://www.w3school.com.cn/php/php_ref_string.asp）</h4>";
	 echo "用strlen测量字符串Hello world的长度：";
	 echo strlen("Hello world!");
	 echo "<br>";
	 echo "用strpos检索字符串Hello world中指定的字符或文本的长度：";
	 echo strpos("Hello world!","world");
	 echo "<br>";

 
	  echo "<br><br><h4>6，PHP常量（常量类似变量，但常量一旦被定义就无法更改或者撤销，常量名称前面没有 $ 符号）</h4>";
	  echo "<h6>如需设置常量，请使用 define() 函数 - 它使用三个参数：<h6>";
	  echo "<ul><li>首个参数定义常量的名称</li>";
	  echo "<li>第二个参数定义常量的值</li>";
	  echo "<li>可选的第三个参数规定常量名是否对大小写敏感。默认是 false 对大小写敏感。</li></ul>";
	  
	  define("GREETING", "Welcome to W3School.com.cn!");
	  echo GREETING;
	  //define("GREETING", "Welcome to W3School.com.cn!", true);
	  //echo greeting;
 
	 echo "<br><br><h4>6，PHP运算符</h4>";
	 echo "<h6>+ 加法，- 减法，* 乘法，/ 除法，% 模数，<h6>";
	 $x=10; 
	 $y=6;
	 echo "10 + 6 = ";
	 echo ($x + $y); // 输出 16
	 echo "<br>";
	 echo "10 - 6 = ";
	 echo ($x - $y); // 输出 4
	 echo "<br>";
	 echo "10 * 6 = ";
	 echo ($x * $y); // 输出 60
	 echo "<br>";
	 echo "10 / 6 = ";
	 echo ($x / $y); // 输出 1.6666666666667
	 echo "<br>";
	 echo "10 % 6 = ";
	 echo ($x % $y); // 输出 4
	 
	 echo "<h6>PHP 赋值运算符<h6>";
	 $x=10; 
	 
	 echo $x; // 输出 10
	 echo "<br>";
	 $y=20; 
	 $y += 100;
	 echo "20 += 200  -> ";
	 echo $y; // 输出 120
	 echo "<br>";
	 $z=50;
	 $z -= 25;
	 echo "50 -= 25  -> ";
	 echo $z; // 输出 25
	 echo "<br>";
	 $i=5;
	 $i *= 6;
	 echo "5 *= 6  -> ";
	 echo $i; // 输出 30
	 echo "<br>";
	 $j=10;
	 $j /= 5;
	 echo "10 /= 5  -> ";
	 echo $j; // 输出 2
	 echo "<br>";
	 $k=15;
	 $k %= 4;
	 echo "15 %= 4  -> ";
	 echo $k; // 输出 3
	 echo "<br>";
	 
	 $x = array("a" => "red", "b" => "green"); 
	$y = array("c" => "blue", "d" => "yellow"); 
	$z = $x + $y; // $x 与 $y 的联合
	var_dump($z);
	var_dump($x == $y);
	var_dump($x === $y);
	var_dump($x != $y);
	var_dump($x <> $y);
	var_dump($x !== $y);
 
	  echo "<br><br><h4>8，PHP if语句，switch语句，while语句，for语句，foreach语句，都和java类似，不赘述</h4>";
	  
	  echo "<br><br><h4>8，PHP函数</h4>";
	  echo "<h6>PHP 的真正力量来自它的函数：它拥有超过 1000 个内建的函数。<h6>";
	  echo "<h6>PHP 默认参数值<h6>";
	  function setHeight($minheight=50) {
		echo "The height is : $minheight <br>";
	  }

	  setHeight(350);
	  setHeight(); // 将使用默认值 50
	  setHeight(135);
	  setHeight(80);
	  
	  echo "<h6>PHP 函数 - 返回值<h6>";
	  function sum($x,$y) {
		$z=$x+$y;
		return $z;
	  }
	  echo "5 + 10 = " . sum(5,10) . "<br>";
	  echo "7 + 13 = " . sum(7,13) . "<br>";
	  echo "2 + 4 = " . sum(2,4);
	  
	  echo "<br><br><h4>9，PHP 数组，数组能够在单独的变量名中存储一个或多个值。</h4>";
	  echo "<h5>PHP 索引数组 - 带有数字索引的数组，用count(arr) 获取数组长度<h5>";
	  echo "<h6>1, 索引是自动分配的（索引从 0 开始）：\$cars=array('Volvo','BMW','SAAB');<h6>";
	  
	  echo "<h6>2, 也可以手动分配索引：<h6>";
	  echo "<ul><li>\$cars[0]='Volvo';</li>";
	  echo "<li>\$cars[1]='BMW';</li>";
	  echo "<li>\$cars[2]='SAAB';</li></ul>";
	  
	  echo "<h5>PHP 关联数组 - 带有指定键的数组, 关联数组是使用您分配给数组的指定键的数组,有两种创建关联数组的方法<h5>";
	  echo "<h6>1, \$age=array('Peter'=>'35','Ben'=>'37','Joe'=>'43');<h6>";
	  
	  echo "<h6>2, 或者：<h6>";
	  echo "<ul><li>\$age['Peter']='35';</li>";
	  echo "<li>\$age['Ben']='37';</li>";
	  echo "<li>\$age['Joe']='43';</li></ul>";
	  
	  echo "<h6>遍历数组<h6>";
	  echo "<ul><li>\$age=array('Bill'=>'35','Steve'=>'37','Peter'=>'43');</li>";
	  echo "<li>foreach(\$age as \$x=>\$x_value) {</li>";
	  echo "<li>   echo 'Key=' . \$x . ', Value=' . \$x_value;</li>";
	  echo "<li>   echo '< br >';</li>";
	  echo "<li>}</li></ul>";
	  
	  $age=array("Bill"=>"35","Steve"=>"37","Peter"=>"43");

		foreach($age as $x=>$x_value) {
		  echo "Key=" . $x . ", Value=" . $x_value;
		  echo "<br>";
		}
	  
	  echo "<h5>10，PHP 多维数组 - 包含一个或多个数组的数组<h5>";
	  echo "<h6>我们将在 PHP 高级教程中讲解多维数组。<h6>";
	  
	  echo "<h4>PHP 数组 排序<h4>";
	  echo "<ul><li>数组的排序函数</li>";
	  echo "<li>sort() - 以升序对数组排序</li>";
	  echo "<li>rsort() - 以降序对数组排序</li>";
	  echo "<li>asort() - 根据值，以升序对关联数组进行排序</li>";
	  echo "<li>ksort() - 根据键，以升序对关联数组进行排序</li>";
	  echo "<li>arsort() - 根据值，以降序对关联数组进行排序</li>";
	  echo "<li>krsort() - 根据键，以降序对关联数组进行排序</li></ul>";
	  
	  $cars=array("Volvo","BMW","SAAB");
	  sort($cars);
	  $clength=count($cars);
	  for($x=0;$x<$clength;$x++){
		echo $cars[$x];
		echo "<br>";
	  }
	  
	echo "<br><br><h4>11，PHP 全局变量 - 超全局变量</h4>";
	echo "<ul><li>这些超全局变量是：</li>";
	echo "<li>\$GLOBALS： \$GLOBALS[index] 的数组中存储了所有全局变量</li>";
	echo "<li>\$_SERVER：保存关于报头、路径和脚本位置的信息</li>";
	echo "<li>\$_REQUEST：用于收集 HTML 表单提交的数据</li>";
	echo "<li>\$_POST：广泛用于收集提交 method=\"post\" 的 HTML 表单后的表单数据。\$_POST 也常用于传递变量。</li>";
	echo "<li>\$_GET：\$_GET 也可用于收集提交 HTML 表单 (method=\"get\") 之后的表单数据。\$_GET 也可以收集 URL 中的发送的数据。</li>";
	echo "<li>< a href=\"test_get.php?subject=PHP&web=W3school.com.cn\">测试 \$GET</ a >	< ? php echo \"Study \" . \$_GET['subject'] . \" at \" . \$_GET['web'];? ></li>";
	echo "<li>\$_FILES：</li>";
	echo "<li>\$_ENV：</li>";
	echo "<li>\$_COOKIE：</li>";
	echo "<li>\$_SESSION：</li></ul>";

	echo $_SERVER['PHP_SELF'];
	echo "<br>";
	echo $_SERVER['SERVER_NAME'];
	echo "<br>";
	echo $_SERVER['HTTP_HOST'];
	echo "<br>";
	echo $_SERVER['HTTP_USER_AGENT'];
	echo "<br>";
	echo $_SERVER['SCRIPT_NAME'];
	echo "<br>";
  
    $name = $_REQUEST['fname']; 
	if(!empty($name)){
		echo $name; 
	}
    
	/*
	<html><body>
		<form action="welcome.php" method="post">
		Name: <input type="text" name="name"><br>
		E-mail: <input type="text" name="email"><br>
		<input type="submit">
	</form>
	</body></html>
	
	Welcome <?php echo $_POST["name"]; ?><br>
	Your email address is: <?php echo $_POST["email"]; ?>
	
	<form action="welcome_get.php" method="get">
		Name: <input type="text" name="name"><br>
		E-mail: <input type="text" name="email"><br>
		<input type="submit">
	</form>
	
	Welcome <?php echo $_GET["name"]; ?><br>
	Your email address is: <?php echo $_GET["email"]; ?>
	*/
	
    
?>
</body>
</html>
