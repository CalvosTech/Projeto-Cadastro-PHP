<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro</title>
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
    <h1>Cadastro Produto</h1>
    <div class="form">
    <form action="#" method="post" autocomplete="off" enctype="multipart/form-data">
        <div class="botoes">
        <label>Nome: </label>
        <input type="text" name="nome_prod" id="nome_prod" required size="50" maxlength="50"><br><br>
        <label>Código: </label>
        <input type="text" name="codigo" id="codigo" required size="17" maxlength="30">
        <label>Validade: </label>
        <input type="date" name="vali" id="vali" required maxlength="14"><br><br>
        <label>Cidade destino: </label>
        <input type="text" name="destino" id="destino" required size="30" maxlength="40">
        <label>Quantidade: </label>
        <input type="number" name="qtd" id="qtd" required maxlength="60" size="45"><br><br>
        <label>Bairro: </label>
        <input type="text" name="bairro" id="bairro" required size="30" maxlength="50">

        <!--<label>UF:</label>
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
        </select>--><br><br>

        <label for="">Produzido em:</label>
        <input type="text" name="cidade_prod" id="cidade_prod" required maxlength="13" size="18">
        <label for="">Imagem:</label>
        <input type="file" name="pic" accept="image/*">
        
        <input type="submit" value="Cadastrar" class="btn-login">
        </div>
    </form>
    </div>

</body>
</html>
<?php
    if(isset($_FILES['pic'])){
        $ext = strtolower(substr($_FILES['pic']['name'],-4));//Pegando extensão do arquivo
        $new_name = date("Y.m.d-H.i.s").$ext;//Definindo um novo nome para o arquivo
        $dir = './pics/';//Diretório para uploads
        move_uploaded_file($_FILES['pic']['tmp_name'],$dir.$new_name);//Fazer upload do arquivo
        echo("Imagem enviada com sucesso!");
    }

	if(!empty($_POST))
	{
		$nome_prod = $_POST['nome_prod'];
		$codigo = $_POST['codigo'];
		$destino = $_POST['destino'];
        $qtd = $_POST['qtd'];
		$num = $_POST['num'];
		$bairro = $_POST['bairro'];
        $cidade_prod = $_POST['cidade_prod'];
		$pic = $_POST['pic']; //Imagem
		
		$arquivo = fopen("cadastros/prod.txt", "a+")or die("Não foi possivel abrir o arquivo!");
		
		$conteudo = "$nome_prod, $codigo, $destino, $qtd, $num, $bairro, $cidade_prod ,$pic,
";

		if(fwrite($arquivo, $conteudo))
		{
			echo "<script>alert('Produto cadastrado com sucesso');</script>";
            
			fclose($arquivo);
		}
		else
		{
			echo "Erro ao cadastrar as informações!";
		}
	
	}


?>