<!DOCTYPE html>
<html lang="pt-br">
<head> <!--configurações-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    
    <title>Programação</title>
    <style type="text/css">
      
      .formulario{
        background-color: #808080;
        color: #ffffff;
        text-shadow: 2px 2px #000;
        padding: 10px;
        font-size: 1.9rem;
        font-weight: bold;
      }
    
      input{
        font-size: 1.7rem;
        padding: 4px;
        border-radius: 10px;
        border: solid;
        font-weight: bold;
      }

    </style>


    
</head>
<body>
    
    <header> <!--configurações do topo do site-->
        <h3> Programação php</h3>
        <h4>tectreinamentos</h4>
    </header> 
    <br>
   
    <section> <!--seção-->
    
    <h1>programação php</h1><br>
    <h2>Insira as informações para calculo de FGTS</h2>
    
      <div class="formulario">

        <form action="analise.php" method="post" target="">
          
          <label for="nome">Nome:</label><br>
          <input type="text" id="nome" name="nome" placeholder="Insira seu nome, desgraça!">
          <br><br>
          <label for="salario">Salario:</label><br>
          <input type="text" id="salario" name="salario" placeholder="Quanto vc ganha, otário?">
          <br><br>
          <input type="submit" name="Enviar"> <br>

        </form>

      </div>

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
