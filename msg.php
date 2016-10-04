<?php
$con = mysql_connect ( "w.rdc.sae.sina.com.cn:3307", "w0ookwz0yj", "5531lm4h1153m541143y3lj5ixyy12jmyyh43i55" );
if (! $con) {
	die ( 'Could not connect: ' . mysql_error () );
}

$dbdatabase = "app_tonyhomepage";

// 进行数据库连接
mysql_select_db ( $dbdatabase, $con );

$sql = "INSERT INTO t_msg (msg_mail, msg_from, msg_content)
VALUES
('$_POST[Mail]', '$_POST[Name]', '$_POST[Content]')";

// 进行数据库操作
if (! mysql_query ( $sql, $con )) {
	die ( 'Error: ' . mysql_error () );
}
echo "1 record added";

mysql_close ( $con );
?>