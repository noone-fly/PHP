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
	 
    
?>
</body>
</html>
