<?php
require "../../conecta.php";
$id_exc = (isset($_GET['procod']))?$_GET['procod']: 0;
	mysqli_query($con,"delete from produtos where procod = {$id_exc} ") or die(mysqli_error($con));
header("Location: list_produtos.php");
?>