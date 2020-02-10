<?php
	class Cadastro{
		public function cadastrar($nome, $curso, $email, $senha){
			//Tratamento das variáveis
			$nome=ucwords(strtolower($nome));
			$curso=ucwords(strtolower($curso));
			$senha=sha1($senha."root");
			//Inserção no banco de dados
			$validaremail=mysql_query("SELECT * FROM usuarios WHERE email='$email'");
			$contar=mysql_num_rows($validaremail);
			if($contar == 0){
			$insert=mysql_query("INSERT INTO usuarios(nome, curso, email, senha, nivel, status)VALUES('$nome','$curso','$email','$senha', '1', '0')");
			} 
			
			else{
			$flash="Desculpe, mas já existe um usuário cadastrado com este e-mail em nosso sistema!";
			}
			if(isset($insert)){
				$flash="Cadastro realizado com sucesso, aguarde a nossa aprovação!";
			}else{
				if(empty($flash)){
				$flash="Ops! Houve um erro em nosso sistema, contate o administrador!";
				}
			}
			
			//Retorno para o usuário
			echo $flash;
		}
	
	}

?>