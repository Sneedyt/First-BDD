<?php
	require 'connect.php';
		$nom= $_POST['nom'];
		$pre= $_POST['pre'];
		$date= $_POST['date'];
	if ( !isset($_POST['sex'])) $sexe='M'; ELSE $sexe= $_POST['sex'];
		$host="127.0.0.1";
		$user="root";
		$pass="";
		$bdd="lycom11";
	mysqli_connect($host,$user,$pass) or die("Impossible de se connecter");
	mysql_select_db("$bdd") or die("Base de donnée inaccessible");
	
		$query= "INSERT INTO club(nom,prenom,sexe,date) VALUES('$nom','$pre','$sexe', '$date')";
	mysqli_query($query);
	echo ('donnee  ecrite!'); 
?>
<HTML>
	<HEAD>
		<TITLE>enregistrement</TITLE>
		<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
	</HEAD>
	<BODY>
		<a href= "index.html">retour</a><br>
	</BODY>
</HTML>
