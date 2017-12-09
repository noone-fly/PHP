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
	 
    
?>
</body>
</html>
