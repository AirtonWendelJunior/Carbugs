

<?php
		include('trava.php');

		if(!isset($_SESSION)) {
			session_start();
		}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title> Site carros 2° semestre</title>
	

	<script>

		window.alert("Gostaríamos de alertar que é sempre indicado a avaliação de um profissional para a avaliação do seu veículo. A manutenção indevida pode colocar em risco você, a sua família e os outros em volta.");
		

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
		.session{
		text-align: left;
		color:crimson;
		font-stretch: expanded;
		font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Verdana, sans-serif	
		}
	
		
	</style>
</head> 
    <body class="conteudo">


   	<header class="cabecalho borda">
	   <p>
        <a href="logout.php">Sair</a>
    </p>
	 
	   <!--<button onclick="voltar()">Voltar</button>-->
		<h3 class = "session">  Bem vindo a Carbugs, <?php echo $_SESSION['nm_usuario']; ?></h3>	
		<section class="titulo">
		<h1 style="border-top-style: groove;"><br><br>CarBugs</h1>
		<p><br>Aqui você vai encontrar informações e vídeos sobre vários veículos.</p>
	</section>
	</header>


   	<aside class="esquerdaborda">
   		<nav>
   			<ul>
   				<li><h1>Escolha entre esses carros, e veja vídeos sobre o mesmo.</h1></li>  
    </body>
    
	   <form method="post" name="meu_form" action="videosrelacionados.php">
       
		<label for="id_veiculo">Escolha um modelo</label>
        <select name="id_veiculo">
            <option value="">Selecione</option>
            <option value="1">206</option>
			<option value="2">307</option>
			<option value="3">308</option>
			<option value="4">106</option>
			<option value="5">2008</option>
			<option value="6">405</option>
			<option value="7">504</option>
			
            
        </select><br><br>

		<input type="submit" value="Enviar">
		<input type="reset" value="Limpar Dados">


		
			<br>
			<br>
			<br><br><br>
	
    </form> 
	
</body>

</form>


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

