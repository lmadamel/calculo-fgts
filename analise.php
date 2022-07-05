<!DOCTYPE html>
<html lang="pt-br">
<head> <!--configurações-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    
    <title>Programação</title>
    
</head>
<body>
    
    <header> <!--configurações do topo do site-->
        <h3> Programação php</h3>
        <h4>tectreinamentos</h4>
    </header> 
    <br>
   
    <section> <!--seção-->
    
    <h1>programação php</h1><br>
    <h2>Resultados de FGTS</h2>
        <?php
        $nomeCliente = $_POST["nome"];
        $salarioCliente = $_POST["salario"];

        $resultadoMensal = ($salarioCliente/100)*8;
        $resultadoAnual= $resultadoMensal*12;

        echo "<br>Oi! $nomeCliente, seu recolhimento mensal é de: R$$resultadoMensal.<br><br>";
        echo "Anualmente será depositado em sua conta um total de: R$$resultadoAnual. <br>";
        

        ?>


      <br>
      <a href="index.php"> << Voltar </a>

    </section>

    
        
        <footer> <!--informações de rodapé-->

        <h3>Programação PHP</h3>
        <h4>tectreinamentos</h4>
        <br>
        <p class="rodape"><b>Contatos:</b></p>
        <br>
        <P class="rodape"><b>Campinas e Região:</b></p> 
        <p class="rodape">(19) 0000-0000</p>
        <p class="rodape">(19) 0000-0000</p>
       
    </footer> 

</body>
</html>
