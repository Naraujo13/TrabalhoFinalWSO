<?php
	include "connection.php";
?>

<html>

<head>
<title>Resultados</title>
</head>

<body>
<?php
$buscar=$_POST['buscar'];
$sql=mysql_query("SELECT * FROM produtosloja WHERE nome LIKE '%".$buscar."%'");
$row = mysql_num_rows($sql);
if($row > 0){
	while($linha = mysql_fetch_array($sql)){
		$id=$linha['id'];
		$nome = $linha['nome'];
		$valor=$linha['valor'];
		echo "<strong>Nome: </strong>".@$nome;
		echo "<br /><br />";
	}
} else{
	echo "Sem registro";

}

?>
</body>

</html>