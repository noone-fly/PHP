<!DOCTYPE html>
<html>
<body>
<h1>PHP�﷨ѧϰ</h1>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Name: <input type="text" name="fname">
<input type="submit">
</form>

<?php
date_default_timezone_set('prc');
	/*Created on 2016��3��8�� */
	 
	 //�� PHP �У������ֻ��������������echo �� print��
	 //   echo �� print ֮��Ĳ��죺
	 //   echo - �ܹ����һ�����ϵ��ַ���
	 //   print - ֻ�����һ���ַ�������ʼ�շ��� 1
	 //   ��ʾ��echo �� print �Կ죬��Ϊ���������κ�ֵ��
     echo date('Y-m-d H:i:s',time());  //2016-03-23 06:08:31
	 echo "<br>";
	 echo time();
	 echo "<br>0���� PHP �У������ֻ��������������echo �� print��<br>";
	 print " Hello world!<br>";
	 echo "<h2>PHP ����Ȥ��</h2>";
	 echo "��λ�", "��", "���", "�ַ���", "���Ӷ��ɡ�";  //echo �����Խ�(����shell����)
	 echo "<br>0��echo��������ʾ�ַ����ͱ��� <br>";
	 $txt1="Learn PHP";
	 $txt2="W3School.com.cn";
	 $cars=array("Volvo","BMW","SAAB");
	 echo $txt1;
	 echo "<br>";
	 echo "Study PHP at $txt2<br>";
	 echo "My car is a {$cars[0]}";
	 
	 //local���ֲ���global��ȫ�֣�sstatic����̬��
	 echo "<br><br><h4>1������ local���ֲ���global��ȫ�֣�sstatic����̬���Ĳ���</h4>";
	 echo "<h6>* php�ı������壬�� $ ���ſ�ͷ������Ǳ���������</h6>";
	 $x=5;
	 function myT(){
		 $y=10;
		 echo "<p>���Ժ����ڲ��ı�����</p>";
		 echo "���� x �ǣ�$x";
		 echo "<br>";
		 echo "���� y �ǣ�$y";
	 }
	 myT();
	 echo "<p>���Ժ���֮��ı�����</p>";
	 echo "���� x �ǣ�$x";
	 echo "<br>";
	 echo "���� y �ǣ�$x ";
	 
	 
	 //PHP ͬʱ����Ϊ $GLOBALS[index] �������д洢�����е�ȫ�ֱ������±���б���������������ں�����Ҳ���Է��ʣ����ܹ�����ֱ�Ӹ���ȫ�ֱ�����
	 echo "<br><br><br>2������ \$GLOBALS[index] �������д洢�����е�ȫ�ֱ����Ĳ���<br>";
	 $x=5;
	 $y=10;
	 function testGlobalsArray() {
	   $GLOBALS['y']=$GLOBALS['x']+$GLOBALS['y'];
	 }
	 testGlobalsArray();
	 echo $y; // ��� 15
	 
	 
	 
	 //ͨ�������������/ִ�к󣬻�ɾ�����б�������������ʱ����Ҫ��ɾ��ĳ���ֲ�������ʵ����һ����Ҫ����һ���Ĺ�����Ҫ�����һ�㣬�������״���������ʱʹ�� static �ؼ��ʣ�
	 //��̬�������ھֲ��������д�����ֻ����ʼ��һ��,������ִ���뿪��������ʱ����ֵ������ʧ,��ʹ���ϴ�ִ�еĽ����
	 echo "<br><br><br>3������static �ؼ��ʵĲ���<br>";
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
	 
	 echo "<br><br><br>3������static �ؼ��ʵĵݹ�Ӧ�ó��ϲ���<br>";
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

	 
	 echo "<br><br><h4>4��PHP�������ͣ� �ַ��������������������߼������顢����NULL��</h4>";
	 echo "<h5>* PHP var_dump() �᷵�ر������������ͺ�ֵ��</h5>";
	 echo "<h6>PHP ����<h6>";
	 $x = 645534;
	 var_dump($x);
	 $x = -345; // ����
	 var_dump($x); 
	 $x = 0x8C; // ʮ��������
	 var_dump($x);
	 $x = 047; // �˽�����
	 var_dump($x);
	 echo "<h6>PHP ������<h6>";
	 $x = 10.365;
	 var_dump($x);
	 $x = 2.4e3;
	 var_dump($x);
	 $x = 8E-5;
	 var_dump($x);
	 echo "<h6>PHP ����<h6>";
	 $cars=array("Volvo","BMW","SAAB");
	 var_dump($cars);
	 echo "<h6>PHP ����<h6>";
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
	 echo "<h6>PHP NULL ֵ: ����� NULL ֵ��ʾ������ֵ��NULL ���������� NULL Ψһ���ܵ�ֵ��NULL ֵ��ʾ�����Ƿ�Ϊ�ա�Ҳ�������ֿ��ַ������ֵ���ݿ⡣����ͨ����ֵ����Ϊ NULL�����������<h6>";
	 $x="Hello world!";
	 $x=null;
	 var_dump($x);
 
 
	 echo "<br><br><h4>5��PHP �ַ���������http://www.w3school.com.cn/php/php_ref_string.asp��</h4>";
	 echo "��strlen�����ַ���Hello world�ĳ��ȣ�";
	 echo strlen("Hello world!");
	 echo "<br>";
	 echo "��strpos�����ַ���Hello world��ָ�����ַ����ı��ĳ��ȣ�";
	 echo strpos("Hello world!","world");
	 echo "<br>";

 
	  echo "<br><br><h4>6��PHP�������������Ʊ�����������һ����������޷����Ļ��߳�������������ǰ��û�� $ ���ţ�</h4>";
	  echo "<h6>�������ó�������ʹ�� define() ���� - ��ʹ������������<h6>";
	  echo "<ul><li>�׸��������峣��������</li>";
	  echo "<li>�ڶ����������峣����ֵ</li>";
	  echo "<li>��ѡ�ĵ����������涨�������Ƿ�Դ�Сд���С�Ĭ���� false �Դ�Сд���С�</li></ul>";
	  
	  define("GREETING", "Welcome to W3School.com.cn!");
	  echo GREETING;
	  //define("GREETING", "Welcome to W3School.com.cn!", true);
	  //echo greeting;
 
	 echo "<br><br><h4>6��PHP�����</h4>";
	 echo "<h6>+ �ӷ���- ������* �˷���/ ������% ģ����<h6>";
	 $x=10; 
	 $y=6;
	 echo "10 + 6 = ";
	 echo ($x + $y); // ��� 16
	 echo "<br>";
	 echo "10 - 6 = ";
	 echo ($x - $y); // ��� 4
	 echo "<br>";
	 echo "10 * 6 = ";
	 echo ($x * $y); // ��� 60
	 echo "<br>";
	 echo "10 / 6 = ";
	 echo ($x / $y); // ��� 1.6666666666667
	 echo "<br>";
	 echo "10 % 6 = ";
	 echo ($x % $y); // ��� 4
	 
	 echo "<h6>PHP ��ֵ�����<h6>";
	 $x=10; 
	 
	 echo $x; // ��� 10
	 echo "<br>";
	 $y=20; 
	 $y += 100;
	 echo "20 += 200  -> ";
	 echo $y; // ��� 120
	 echo "<br>";
	 $z=50;
	 $z -= 25;
	 echo "50 -= 25  -> ";
	 echo $z; // ��� 25
	 echo "<br>";
	 $i=5;
	 $i *= 6;
	 echo "5 *= 6  -> ";
	 echo $i; // ��� 30
	 echo "<br>";
	 $j=10;
	 $j /= 5;
	 echo "10 /= 5  -> ";
	 echo $j; // ��� 2
	 echo "<br>";
	 $k=15;
	 $k %= 4;
	 echo "15 %= 4  -> ";
	 echo $k; // ��� 3
	 echo "<br>";
	 
	 $x = array("a" => "red", "b" => "green"); 
	$y = array("c" => "blue", "d" => "yellow"); 
	$z = $x + $y; // $x �� $y ������
	var_dump($z);
	var_dump($x == $y);
	var_dump($x === $y);
	var_dump($x != $y);
	var_dump($x <> $y);
	var_dump($x !== $y);
 
	  echo "<br><br><h4>8��PHP if��䣬switch��䣬while��䣬for��䣬foreach��䣬����java���ƣ���׸��</h4>";
	  
	  echo "<br><br><h4>8��PHP����</h4>";
	  echo "<h6>PHP �����������������ĺ�������ӵ�г��� 1000 ���ڽ��ĺ�����<h6>";
	  echo "<h6>PHP Ĭ�ϲ���ֵ<h6>";
	  function setHeight($minheight=50) {
		echo "The height is : $minheight <br>";
	  }

	  setHeight(350);
	  setHeight(); // ��ʹ��Ĭ��ֵ 50
	  setHeight(135);
	  setHeight(80);
	  
	  echo "<h6>PHP ���� - ����ֵ<h6>";
	  function sum($x,$y) {
		$z=$x+$y;
		return $z;
	  }
	  echo "5 + 10 = " . sum(5,10) . "<br>";
	  echo "7 + 13 = " . sum(7,13) . "<br>";
	  echo "2 + 4 = " . sum(2,4);
	  
	  echo "<br><br><h4>9��PHP ���飬�����ܹ��ڵ����ı������д洢һ������ֵ��</h4>";
	  echo "<h5>PHP �������� - �����������������飬��count(arr) ��ȡ���鳤��<h5>";
	  echo "<h6>1, �������Զ�����ģ������� 0 ��ʼ����\$cars=array('Volvo','BMW','SAAB');<h6>";
	  
	  echo "<h6>2, Ҳ�����ֶ�����������<h6>";
	  echo "<ul><li>\$cars[0]='Volvo';</li>";
	  echo "<li>\$cars[1]='BMW';</li>";
	  echo "<li>\$cars[2]='SAAB';</li></ul>";
	  
	  echo "<h5>PHP �������� - ����ָ����������, ����������ʹ��������������ָ����������,�����ִ�����������ķ���<h5>";
	  echo "<h6>1, \$age=array('Peter'=>'35','Ben'=>'37','Joe'=>'43');<h6>";
	  
	  echo "<h6>2, ���ߣ�<h6>";
	  echo "<ul><li>\$age['Peter']='35';</li>";
	  echo "<li>\$age['Ben']='37';</li>";
	  echo "<li>\$age['Joe']='43';</li></ul>";
	  
	  echo "<h6>��������<h6>";
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
	  
	  echo "<h5>10��PHP ��ά���� - ����һ���������������<h5>";
	  echo "<h6>���ǽ��� PHP �߼��̳��н����ά���顣<h6>";
	  
	  echo "<h4>PHP ���� ����<h4>";
	  echo "<ul><li>�����������</li>";
	  echo "<li>sort() - ���������������</li>";
	  echo "<li>rsort() - �Խ������������</li>";
	  echo "<li>asort() - ����ֵ��������Թ��������������</li>";
	  echo "<li>ksort() - ���ݼ���������Թ��������������</li>";
	  echo "<li>arsort() - ����ֵ���Խ���Թ��������������</li>";
	  echo "<li>krsort() - ���ݼ����Խ���Թ��������������</li></ul>";
	  
	  $cars=array("Volvo","BMW","SAAB");
	  sort($cars);
	  $clength=count($cars);
	  for($x=0;$x<$clength;$x++){
		echo $cars[$x];
		echo "<br>";
	  }
	  
	echo "<br><br><h4>11��PHP ȫ�ֱ��� - ��ȫ�ֱ���</h4>";
	echo "<ul><li>��Щ��ȫ�ֱ����ǣ�</li>";
	echo "<li>\$GLOBALS�� \$GLOBALS[index] �������д洢������ȫ�ֱ���</li>";
	echo "<li>\$_SERVER��������ڱ�ͷ��·���ͽű�λ�õ���Ϣ</li>";
	echo "<li>\$_REQUEST�������ռ� HTML ���ύ������</li>";
	echo "<li>\$_POST���㷺�����ռ��ύ method=\"post\" �� HTML ����ı����ݡ�\$_POST Ҳ�����ڴ��ݱ�����</li>";
	echo "<li>\$_GET��\$_GET Ҳ�������ռ��ύ HTML �� (method=\"get\") ֮��ı����ݡ�\$_GET Ҳ�����ռ� URL �еķ��͵����ݡ�</li>";
	echo "<li>< a href=\"test_get.php?subject=PHP&web=W3school.com.cn\">���� \$GET</ a >	< ? php echo \"Study \" . \$_GET['subject'] . \" at \" . \$_GET['web'];? ></li>";
	echo "<li>\$_FILES��</li>";
	echo "<li>\$_ENV��</li>";
	echo "<li>\$_COOKIE��</li>";
	echo "<li>\$_SESSION��</li></ul>";

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
