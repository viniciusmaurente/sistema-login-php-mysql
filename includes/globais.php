<?php
$home="http://localhost/sistemaphp";
$title="Painel Administrativo";
$acao="";
$startaction="";
$msg="";
if(isset($_GET["acao"])){
	$acao=$_GET["acao"];
	$startaction=1;
}
?>