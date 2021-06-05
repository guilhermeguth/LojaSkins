<?php
require "../../conecta.php";
require "../../lib/4zlib/4z-funcoes.php";

$id_exc = (isset($_GET['id_exc']))?$_GET['id_exc']: 0;


	mysqli_query($con,"delete from representante where repre_id = {$id_exc} ") or die(mysql_error());



;
header("Location: list_cad.php");
?>