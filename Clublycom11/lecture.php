<HTML>
	<head>
		<TITLE>lecture</TITLE>
		<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
	</head>
<body>
	<?PHP
	require 'connect.php';
		$host="127.0.0.1";
		$user="root";
		$pass="";
		$bdd="lycom11";
	mysqli_connect($host,$user,$pass) or die("Impossible de se connecter");
	mysql_select_db("$bdd") or die ("Impossible de se connecter");
	
		$query = "SELECT * FROM club ORDER BY time ASC";
		$reponse = mysqli_query($query);
		$nb = mysqli_num_rows($reponse);
	if ($nb) 
	{
		echo "<pre>";
		echo "nombre de personnes: $nb<br>";
			$i=0;
		while ($i<$nb)
		{
			$id=mysql_result($reponse,$i,"id");
			$nom=mysql_result($reponse,$i,"nom");
			$pre=mysql_result($reponse,$i,"prenom");
			$sexe=mysql_result($reponse,$i,"sexe");
			$date=mysql_result($reponse,$i,"date");
			echo "$id \t $nom \t $pre \t $sexe \t $date<br>";
			$i++;
		}
		echo "</pre>";
	}
	mysqli_close();
	?>
	<a href= "index.html">retour</a><br> 
</body>
</HTML>
