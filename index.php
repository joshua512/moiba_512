<html>
<head>
<meta http-equiv="Content-type" content="text/html;charset=utf-8">
<style>
	header{border-bottom:1px solid gray;}
	nav, article{float:left}
	nav{width:150px; border-right:1px solid gray; height:1000px}
	article{width:400px padding:10px}

</style>
</head>
<body>
<header>
<h1> JavaScript </h1>
</header>
<?php
$link = mysql_connect('localhost', 'root', '111111');
mysql_select_db('opentutorials');
mysql_query("set session character_set_connection=utf8;");
mysql_query("set session character_set_results=utf8;");
mysql_query("set session character_set_client=utf8;");
$sql = "SELECT id, title FROM topic";
$result = mysql_query($sql);
?>
<nav>
<ol>
<?php
while($row=mysql_fetch_assoc($result)){
	echo "<li><a href=\"./index.php?id=".$row['id']."\">".$row['title']."</a></li>";
}
?>
</ol>
</nav>
<article>
<?php
$sql = "select * from topic where id={$_GET['id']}";
echo $sql;
$result = mysql_query($sql);
$row=mysql_fetch_assoc($result);
?>
	<h2><?=$row['title']?> </h2>
	<div>
		<?=$row['description']?>
	</div>

</article>
</body>
</html>
