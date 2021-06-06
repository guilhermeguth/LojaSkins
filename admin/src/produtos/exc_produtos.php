<?php
require "../../conecta.php";
require "../../lib/4zlib/4z-funcoes.php";

$procod = (isset($_GET['procod']))?$_GET['procod']: 0;


	mysqli_query($con,"delete from produtos where procod = {$procod} ") or die(mysql_error());



;
header("Location: list_cad.php");
?>