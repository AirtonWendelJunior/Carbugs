<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>title</title>

   
    
   
    
    <script>
    function voltar() {
        window.location.href = 'http://localhost/carbugs/';
    }
    </script>
        

</head>

<style type="text/css">
    .borda {
        border: 2px solid black;
        padding: 40px;
        background-image: url('https://st3.depositphotos.com/4312111/17460/i/450/depositphotos_174604288-stock-photo-black-sports-car.jpg');	
        background-size: cover;
        color: azure;
    }
    .borda1 {
        border: 2px solid black;
        padding: 40px;
        background-color: rgba(153, 114, 189, 0.332);
    }
    .borda2 {
        border: 2px solid black;
        padding: 40px;
        background-color: rgba(153, 114, 189, 0.332);
    }
    .borda3 {
        border: 2px solid black;
        padding: 40px;
        background-color:rgba(153, 114, 189, 0.332);
    }
</style>

<body>
    
    <?php

    session_start();
	
    echo $_SESSION['id_veiculo'];

    ?>
    
    <section class="borda">

        <button onclick="voltar()">Voltar</button>

        <h2>Vídeos relacionados a sua pesquisa:</h2>
     <article class="borda1">
        <a href="https://www.youtube.com/watch?v=DRJbcdFsF-o">Barulho na suspensão do Peugeot 206</a>
     </article>
     <article class="borda2">
        <a href="https://www.youtube.com/watch?v=B7Y4S1NOWgY">Problemas no motor da linha Clio</a>
     </article>
     <article class="borda3">
        <a href="https://www.youtube.com/results?search_query=daihatsu+cuore">Conheça o Daihatsu Cuore</a>
     </article>
    </section>



</body>
</html>