<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Megasena</title>
</head>
<body>
<?php
    $contador = isset ($_GET['temp']) ? $_GET['temp'] : 0;
    if($contador == 0){

    }else{

    }       
    ?>

    <style>
    .sortear{
        font-family: Verdana, Geneva , Tahoma, sans-serif;             
        background-color: #00CED1;
        width: 80px;
        height: 50px;
        display:flex;              
        
    }
    .sorteio{
        text-align: center;
    }
    body{
        background: linear-gradient(45deg, blue, red )no-repeat;
    }
    .numeros {
       display: flex;
       margin-left:105px;
       justify-content:space-around; 
    }
    .numero {
        height: 50px;
        width: 50px;
        border-radius: 50%;
        border: 5px solid green;
        display: flex;
        align-items: center;
        justify-content: center;
        color:white;
        font-weight: bolder;
        font-size: 30px;        
    }  
    
    </style>
    

    <div>
    <div class="sorteio">
        <h1>Mega Sena</h1>
    </div>
    <div class="numeros">
        <div class="numero"><?php echo $contador == 0 ? "?" : rand(1, 60)?></div>
        <div class="numero"><?php echo $contador == 0 ? "?" : rand(1, 60)?></div>
        <div class="numero"><?php echo $contador == 0 ? "?" : rand(1, 60)?></div>
        <div class="numero"><?php echo $contador == 0 ? "?" : rand(1, 60)?></div>
        <div class="numero"><?php echo $contador == 0 ? "?" : rand(1, 60)?></div>
        <div class="numero"><?php echo $contador == 0 ? "?" : rand(1, 60)?></div>
    </div>
    <div class="sortear">
    <form action="?temp=1" method="post">
    <button>Estou com Sorte</button>
    </form>
    </div>        
    </div>
</body>
</html>

<?php

?>