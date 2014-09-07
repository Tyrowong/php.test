<<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html;charest=gb2312">
	<title>获取服务器信息的第一个php程序</title>
</head>
<body>
<?php
	$sysos =$_SERVER["SERVER_SOFTWARE"]; //获取服务器标识的子串
	$sysversion = PHP_VERSION; //获取PHP服务器版本

	//以下两条代码连接MySQL数据库并获取MySQL数据库版本信息
	mysql_connect("localhost","root","jiahan007");
	$mysqlinfo = mysql_get_server_info();

	//从服务器中获取GD库的信息
	if (function_exists("gd_info")) {
		$gd = gd_info();
		$gdinfo = $gd['GD Version'];
	}else{
		$gdinfo = "未知"
	}
	//从GD库中查看是否支持FreeType字体
	$freetype = $gd["FreeType Support"]?"支持":"不支持";

	//从PHP配置文件中获得是否可以远程文件获取
	$allowurl = ini_get("allow_url_fopen")?"支持":"不支持";

	//从PHP配置文件中获得最大上传限制
	$max_upload = ini_get("file_uploads")?ini_get("upload_max_filesize"):"Disabled";

	//从PHP配置文件中获得脚本的最大执行时间
	$max_ex_time = ini_get("max_execution_time")."秒";

	//以下两条获取服务器时间，中国大陆采用的是东八区的时间，设置市区写成Etc/GMT-8
	date_default_timezone_set("Etc/GMT-8")；
	$systemtime = date("Y-m-d H:i:s",time());





	echo"<table align=center cellspacing=0 cellpadding=0>";
	echo"<caption><h2>系统信息</h2></caption>";
	echo"<tr><td>Web服务器</td><td>$sysos</td></tr>";
	echo"</table>";
?>
</body>
</html>