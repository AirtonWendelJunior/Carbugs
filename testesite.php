<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title> Site carros 2° semestre</title>
	

	<script>

		window.alert("Gostaríamos de alertar que é sempre indicado a avaliação de um profissional para a avaliação do seu veículo. A manutenção indevida pode colocar em risco você, a sua família e os outros em volta.");
		

		function validarFormulario() {
    var nome = document.forms["meu_form"]["nome"].value;
    var email = document.forms["meu_form"]["email"].value;
    var idade = document.forms["meu_form"]["idade"].value;
    var genero = document.querySelector('input[name="genero"]:checked');

    if (nome === "") {
        alert("É necessário preencher o campo Nome Completo.");
        return false;
    }
    if (email === "") {
        alert("É necessário preencher o campo E-mail.");
        return false;
    }
    if (idade === "") {
        alert("É necessário preencher o campo Idade.");
        return false;
    }
    if (!genero) {
        alert("É necessário selecionar um gênero.");
        return false;
    }
    return true;


}
</script>
	<style>	
		.sujestoes {
			grid-template-columns: 1fr;
			float: auto;
			
		}
		.form {
            float: left;
            width: 33%; 
            box-sizing: border-box; 
		}
		.enquete{
			border: 1px solid #ccc;
            padding: 10px;
            overflow: hidden;
			background-color:darkgrey;	

		}

		.borda {
			border: 1px solid #ccc;
            padding: 10px;
            overflow: hidden; 
			background-color:beige;	
			
		}
		.conteudo {
			display: grid;
			grid-template-columns: 1fr 4fr;
			grid-template-rows: repeat(5, 250px);
			
		}
		.secao {
			display: grid;
			grid-template-columns: 1fr 1fr 1fr 1fr;
			grid-template-rows: 1fr 1fr;
			background-color: rgb(70, 70, 105);	
		}
		.borda2 {
   		background-image: url('https://mir-s3-cdn-cf.behance.net/projects/404/00af38106356479.Y3JvcCwxMzgwLDEwODAsMjcwLDA.png');
    	background-size: cover;
   		background-repeat: no-repeat;
  	    background-position: center; 
  
		}
		.borda1 {
    	background-image: url('https://cdn.autopapo.com.br/box/uploads/2019/11/06174544/caoa-chery-logo.png'); 
    	background-size: cover; 
    	background-repeat: no-repeat; 
    	background-position: center; 
   
		}
		.borda3 {
    	background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS0vNY8uClIjfmKfWcL4wI9XAKpv4vJAbazGQ&usqp=CAU'); 
    	background-size: cover;
    	background-repeat: no-repeat;
    	background-position: center; 
  
		}
		.borda4 {
    	background-image: url('https://logowik.com/content/uploads/images/changan-automobile8230.logowik.com.webp'); 
    	background-size: cover; 
    	background-repeat: no-repeat;
    	background-position: center; 
   
		}
		article {
		grid-row-start: 2;
		color: rgb(250, 250, 250);
		font-style:italic, oblique;
		font-size: larger;
		background-color: rgb(44, 44, 94);
		background-size: cover;
		background-repeat: no-repeat;
    	background-position: center;
		}
		.cabecalho{
			background-image: url('https://st3.depositphotos.com/4312111/17460/i/450/depositphotos_174604288-stock-photo-black-sports-car.jpg');
    		background-size: cover; 
			background-position: center;
			grid-column-start: 1;
			grid-column-end: 3;
			background-color: rgb(44, 44, 94);
		}
		.esquerdaborda{
			grid-row-start: 2;
			grid-row-end: 5;
			background-color: rgb(74, 103, 135);
		}
		.titulo{	
		text-align: center;
		color: aliceblue;
		font-stretch: expanded;
		font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Verdana, sans-serif	
		}
		
		.rodapeborda{
			grid-column-start: 1;
			grid-column-end: 3;
			background-color: rgb(44, 44, 94);
			
		}
	
		
	</style>
</head> 
    <body class="conteudo">
   	<header class="cabecalho borda">
		
		<section class="titulo">
		<h1 style="border-top-style: groove;"><br><br>CarBugs</h1>
		<p><br>Aqui você vai encontrar amigos que tem ou tambem tiveram problemas com seus veículos, e poderão lhe auxiliar a resolver os seus problemas.</p>
	</section>
	</header>


   	<aside class="esquerdaborda">
   		<nav>
   			<ul>
   				<li><h1>Cadastre-se no nosso site, e receba videos sobre problemas reccorentes do seu veículo!</h1></li>  
    </body>
    <h1>Formulário</h1>

	   <form method="post" name="meu_form"  onsubmit="return validarFormulario()">
        <label for="nome">Nome Completo:</label><br>
        <input type="text" name="nome"><br><br>

        <label for="email">E-mail:</label><br>
        <input type="text" name="email"><br><br>
		
		<label for="idade">Idade:</label><br>
        <input type="text" name="idade"><br><br>

		<label for="genero">Gênero:</label><br>
		<input type="radio" name="genero" value="Masculino">
		<label for="masculino">Masculino</label><br>
		<input type="radio" name="genero" value="Feminino">
		<label for="feminino">Feminino</label><br>
		<input type="radio" name="genero" value="Outro">
		<label for="outro">Outro</label><br><br>

		<label for="carro">Qual é o seu carro?</label>
        <select name="carro">
            <option value="">Selecione</option>
            <option value="206">206</option>
            <option value="clio">Clio</option>
            <option value="xsara">Xsara</option>
        </select><br><br>

		<input type="submit" value="Enviar">
		<input type="reset" value="Limpar Dados">

			<br>
			<br>
			<br><br><br>
	
    </form> 
	
</body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $idade = $_POST["idade"];
    $genero = $_POST["genero"];
	$carro = $_POST ["carro"];
	
	require_once("conexao.php");

    try {
      
        $stmt = $pdo->prepare("INSERT INTO tb_usuarioteste (nm_usuario, id_email, id_idade, id_genero,nm_carro) VALUES (?,?, ?, ?, ?)");
        $stmt->execute([$nome, $email, $idade, $genero, $carro]);
        
		
		
		
		echo "Dados inseridos com sucesso!";
		die();
    } catch (PDOException $e) {
        echo "Erro ao inserir dados no banco de dados: " . $e->getMessage();
    }
}
?>
</form>
</body>

</html>
			   
   	</ul>
   	</nav>
	</aside>

   	<section class="secao borda">
   		<h1>Principais marcas chinesas:</h1>
		<article class="borda1">
			<a href="https://caoachery.com.br/tiggo8-maxdrive?utm_source=google&utm_medium=cpc&utm_campaign=Havas_Caoa-Chery_fy23q3_tr%C3%A1fego_leil%C3%A3o_exploration-evaluation_always-on_tiggo-8-maxdrive-combustao&utm_content=Havas_Caoa-Chery_fy23q3_google_search_texto_tiggo-8-maxdrive-combustao_always-on-agosto_exploration-evaluation_kw_cpc_visitas&utm_id=Havas&utm_term=fy23q3&gclid=EAIaIQobChMI_ZfymPjDgQMVQzHUAR1pEQUXEAAYASAAEgLnB_D_BwE" target="_self"> Chery </a>
		</article>
		<article class="borda2" >
			<a href="https://pt.wikipedia.org/wiki/Lifan" target="_self"> Lifan </a>
		</article>
		<article class="borda3">
			<a href="https://pt.wikipedia.org/wiki/SsangYong_Motor_Company" target="_self"> SsangYong </a>
		</article>
		<article class="borda4">
			<a href="http://www.globalchangan.com/" target="_self"> Changan </a>
		</article>
   	</section>


   	<section class="borda ">
		<h2>Novidades da semana!</h2>
		<p>
		<a href="https://autopapo.uol.com.br/noticia/carros-franceses/" target="_self"> O quê está acontecendo com os carros franceses? </a>
		</p>	
		<p>
		<a href="https://qcveiculos.com.br/carros-chineses/" target="_self"> Carros chineses: Principais problemas de mercado no Brasil. </a>
		</p>	
		<p>
		<a href="https://autocertoveiculosjf.com.br/blog/6-sinais-que-o-seu-carro-esta-dando-problema/" target="_self">  6 sinais que o seu carro está dando problema. </a>
		</p>	
		<p>
		<a href="https://autopapo.uol.com.br/noticia/manipulacao-resultado-corrida-f1/" target="_self">  Manipulação de resultado: 5 vezes que as corridas da F1 foram definidas fora das pistas. </a>
		</p>	
		</section>
	
	<section class = "rodapeborda">

	</section>
   	
</body>
</html>

