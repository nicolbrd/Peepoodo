<!DOCTYPE html>
<html>
<head>
	<title>Friend book</title>
	<style>
/* Style the header */
header {
 background-color: #800000;
 padding: 30px;
 text-align: center;
 font-size: 35px;
 color: white;
}
/* Style the footer */
footer {
 background-color: #777;
 padding: 10px;
 text-align: center;
 color: white;
}
p{
	font-size: 35px;

}
li{
	width: 10;
}
</style>
</head>

</head>
<body>
<header>
 <h2>Friend book</h2>
</header>
<br>
	<form method="post" action="index.php" >
	 Name:<input type="text" name="name">
	<input type="submit">
	</form>
<br>

<p><b>My Best Friends :</b></p>
<?php
	$filename = 'friends.txt';
	if(isset($_POST['name'])) {
		$file = fopen( $filename, "a" );
		fwrite( $file, $_POST['name']);
		fwrite( $file, "\n");
	}

	$file = fopen( $filename, "r" );
	while (!feof($file)) {
	    Lgn=fgets($file);
	    if(isset($_POST['filtername']) and $_POST['filtername']!=''){
	    	Lgn=strstr(Lgn, $_POST['filtername'],true).strstr(Lgn, $_POST['filtername']);
	    	if(Lgn)echo "<ul><li>Lgn</ul></li><br>";
	    }
	    else{
	    	if(Lgn)echo "<ul><li>Lgn</ul></li><br>";
	    }
	    
	}
	
?>
<br>
	<form method="post" action="index.php" >
	<input type="text" name="filtername">
	<input type="submit" value="Filter list">
	</form>
<br>
<footer>
 <h2>footer</h2>
</footer>
</body>
</html>
