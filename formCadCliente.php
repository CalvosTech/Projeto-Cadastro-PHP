<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro</title>
    <script>
    function limpa_formulario_cep() {
        //Limpa valores do formulário de cep.
        document.getElementById('rua').value=("");
        document.getElementById('bairro').value=("");
        document.getElementById('uf').value=("");
    }
    
    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
        //Atualiza os campos com os valores.
        document.getElementById('rua').value=(conteudo.logradouro);
        document.getElementById('bairro').value=(conteudo.bairro);
        document.getElementById('uf').value=(conteudo.uf);
        } //end if.

        else {
        //CEP não Encontrado.
        limpa_formulario_cep();
        alert("CEP não encontrado.");
        }
    }
    
    function pesquisacep(valor) {
        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');
        
        //Verifica se campo cep possui valor informado.
        if (cep != "") {
        
        //Expressão regular para validar o CEP.
        var validacep = /^[0-9]{8}$/;
        
        //Valida o formato do CEP.
        if(validacep.test(cep)) {
            //Preenche os campos com "..." enquanto consulta webservice.
            document.getElementById('rua').value="...";
            document.getElementById('bairro').value="...";
            document.getElementById('uf').value="...";
            
            //Cria um elemento javascript.
            var script = document.createElement('script');
            
            //Sincroniza com o callback.
            script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';
            
            //Insere script no documento e carrega o conteúdo.
            document.body.appendChild(script);
            
            } //end if.

            else {
            //cep é inválido.
            limpa_formulario_cep();
            alert("Formato de CEP inválido.");
            }
        } //end if.
        
        else {
        //cep sem valor, limpa formulário.
        limpa_formulario_cep();
        }
    };
    </script>
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
            display: inline-block;
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
            margin: 10px 0px;
            background: #2f2841;
            padding: 28px;
            border-radius: 18px;  
        }

        .botoes > input{ 
            border: none;
            border-radius: 10px;
            padding: 8px;
            background: #514869;
            color: #f0f8ffe3;
            font-size: 12pt;
            box-shadow: 0px 10px 40px #00000056;
            outline: none;
            
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
        }
        
        
    </style>
</head>
<body>
    <h1>Cadastro Cliente</h1>
    <div class="form">
    <form action="#" method="post" autocomplete="off">
        <div class="botoes">
        <label>Nome: </label>
        <input type="text" name="nome" id="nome" required size="50" maxlength="50"><br><br>
        <label>CPF: </label>
        <input type="text" name="cpf" id="cpf" required size="30" placeholder="333.333.333-33" maxlength="17">
        <label>RG: </label>
        <input type="text" name="rg" id="rg" required size="30" placeholder="33.333.333-3" maxlength="14"><br><br>
        <label>CEP: </label>
        <input type="text" name="cep" id="cep" required size="30" placeholder="33333-333" onblur="pesquisacep(this.value);" maxlength="10">
        <label>Rua: </label>
        <input type="text" name="rua" id="rua" required maxlength="60" size="45"><br><br>
        <label>Número:</label>
        <input type="text" name="num" id="num" required size="17" maxlength="6">
        <label>Bairro: </label>
        <input type="text" name="bairro" id="bairro" required size="30" maxlength="50">

        <label>UF:</label>
        <select name="select" required id="uf">
        <option value=""></option>
        <option value="SP">SP</option>
        <option value="RJ">RJ</option>
        <option value="ES">ES</option>
        <option value="MG">MG</option>
        <option value="BA">BA</option>
        <option value="AC">AC</option>
        <option value="RS">RS</option>
        <option value="AM">AM</option>
        <option value="RN">RN</option>
        <option value="GO">GO</option>
        <option value="SC">SC</option>
        <option value="SE">SE</option>
        <option value="TO">TO</option>
        <option value="PE">PE</option>
        <option value="MA">MA</option>
        <option value="PI">PI</option>
        <option value="PR">PR</option>
        <option value="PB">PB</option>
        <option value="AL">AL</option>
        <option value="MS">MS</option>
        <option value="AL">AL</option>
        <option value="DF">DF</option>
        <option value="AC">AC</option>
        <option value="RS">RS</option>
        <option value="RO">RO</option>
        <option value="RS">RS</option>
        <option value="RR">RR</option>
        <option value="RN">RN</option>
        </select><br><br>

        <label for="">Celular:</label>
        <input type="tel" name="cell" id="cell" placeholder="(33)33333-3333" pattern="[0-9]{(2)}[0-9]{5}-[0-9]{4}" required maxlength="13" size="18">
        <label for="">E-mail:</label>
        <input type="email" name="mail" id="mail" required maxlength="30"><br><br>  
        
        <input type="submit" value="Cadastrar" class="btn-login">
        </div>
    </form>
    </div>

</body>
</html>

<?php

	if(!empty($_POST))
	{
		$nome = $_POST['nome'];
		$cpf = $_POST['cpf'];
		$rg = $_POST['rg'];
		$cep = $_POST['cep'];
        $rua = $_POST['rua'];
		$num = $_POST['num'];
		$bairro = $_POST['bairro'];
		$uf = $_POST['uf'];
        $cell = $_POST['cell'];
		$email = $_POST['mail'];
		
		$arquivo = fopen("cadastros/clientes.txt", "a+")or die("Não foi possivel abrir o arquivo!");
		
		$conteudo = "$nome, $cpf, $rg, $cep, $uf, $bairro, $num, $rua ,$cell, $email
";

		if(fwrite($arquivo, $conteudo))
		{
			echo "<script>alert('Cliente cadastrado com sucesso');</script>";
            
			fclose($arquivo);
		}
		else
		{
			echo "Erro ao cadastrar as informações!";
		}
	
	}


?>