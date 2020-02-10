<?php
	class DB{
		public function conectar(){
			$host="localhost";
			$user="root";
			$pass="root";
			$dbname="sistemaphp";
			
			$conexao=mysql_connect($host,$user,$pass);
			$selectdb=mysql_select_db($dbname);
			
			return $conexao;
			
		}
		
	}


?>