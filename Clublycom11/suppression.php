<?php
	require 'connect.php';
		$cnx = mysqli_connect( "127.0.0.1", "root", "" ) ;
		$bdd = mysql_select_db( "lycom11" ) ;
		$id  = $_POST["id"] ;
		$sql = "DELETE FROM club WHERE id = ".$id ;
  echo $sql ;	    
		$requete = mysqli_query( $sql, $cnx ) ;
  if($requete)
  {
    echo("La suppression à été correctement effectuée") ;
  }
  else
  {
    echo("La suppression à échouée") ;
  }
?>
