<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Usuário</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap');

body{
    margin: 0;
    font-family: 'Noto Sans', sans-serif;
    background: #201b2c;
    color: #f0f8ffd6;
}

h1{
    font-size: 3vw;
    color: #77ffc0e0;
    text-align: center;
}

.form {
    margin: 0;
    font-family: 'Noto Sans', sans-serif;
    background: #201b2c;
    color: #f0f8ff;
    display: flex;
    flex-direction: column;
    align-items: center;
}

/* Estilizando os botões */
.botoes{
    width: 30vw;
    height: 35vh;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    margin: 10px 0px;
    background: #2f2841;
    padding: 15px;
    border-radius: 18px;
}

.botoes > input{ 
    border: none;
    border-radius: 10px;
    padding: 8px;
    background: #514869;
    color: #f0f8ffe3;
    font-size: 12pt;
    box-shadow: 0px 10px 5px #00000012;
    outline: none;
    
}

.textfield{
    border: 10px;
}

.textfield > input{
    width: 100%;
    border: none;
    border-radius: 10px;
    padding: 10px;
    background: #514869;
    color: aliceblue;
    outline: none;
    font-size: 12pt;
    box-sizing: border-box;
    margin-bottom: 10px;
}

.botoes > select{
    background: #514869;
    border-radius: 10px;
    color: aliceblue;
    outline: none;
}

.botoes > input::placeholder{
    color: #d3d3bf;
}

.btn-login{
    margin-top: 10px;
    width: 100%;
    padding: 16px 0px;
    border: none;
    border-radius: 8px;
    outline: none;
    text-transform: uppercase;
    font-weight: 800;
    letter-spacing: 2px;
    color: #2b134b;
    background-color: #00ff88;
    cursor: pointer;
    box-shadow: 0px 10px 40px -12px #00ff8052;
    margin-top: 25px;
}
    </style>
</head>
<body>
    <main>
        <h1>Cadastro de Usuário</h1>
        <div class="form">
        <form action="#" method="post" autocomplete="off">
            <div class="botoes">
                <div class="textfield">
                    <label>Login</label>
                    <input type="email" name="login" id="login" required maxlength="30" placeholder="Login">
        
                    <label>Senha</label>
                    <input type="password" name="senha" id="senha" required maxlength="30" placeholder="Senha">
                    </div>
                <input type="submit" value="Cadastrar" class="btn-login">
        
            </div>
        </form>
        </div>
    </main>
</body>
</html>
<?php

	if(!empty($_POST))
	{
		$login = $_POST['login'];
        $senha = $_POST['senha'];
		
		$arquivo = fopen("cadastros/usuario.txt", "a+")or die("Não foi possivel abrir o arquivo!");
		
		$conteudo = "$login, $senha
";

		if(fwrite($arquivo, $conteudo))
		{
			echo "<script>alert('Usuário cadastrado com sucesso');</script>";
            
			fclose($arquivo);
		}
		else
		{
			echo "Erro ao cadastrar as informações!";
		}
	
	}


?>