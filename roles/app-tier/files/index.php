
<?php
	$db=mysqli_connect("appdb1.d24e.internal", "root" ,"redhat", "userdb");

	if (mysqli_connect_errno()){
		echo "Failed to connect";
	}
	$sql="SELECT username,userpass,usershell,userhome from login where username=\"$_GET[name]\"";
	if($result=mysqli_query($db,$sql)){


	while ($row=mysqli_fetch_row($result)){
		echo $row[0] . " " . $row[1] ." " .  $row[2]. " ", $row[3]. "<br />";
	exit();
	}
	}

?>


<html>
<body>

	<form action="<?php $_PHP_SELF?>" method="GET" >
		Enter User Name: <input type=text name="name" />
		<input type="submit" />

	</form>

</body>

</html>
