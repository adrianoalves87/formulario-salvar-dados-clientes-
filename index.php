<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css.css">
    <title>Formulário de Cadastro</title>
</head>
<body>
         
<div class="container">
       
<form action="processar_formulario.php" method="post">

<div class="masked-text">
      Cadastro
    </div>         
        
 <br>    
      <div class="input-group">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>
            </div>

            <div class="input-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="input-group">
                <label for="telefone">Telefone:</label>
                <input type="tel" id="telefone" name="telefone" required>
            </div>

            <div class="input-group">
            <label for="senha">Senha:</label>
      <input type="password" id="senha" name="senha" required>
      <br>
            </div>
            <button class="glow-on-hover" type="submit">Enviar</button>

           
        </form>
    </div>
</body>
</html>

     
     
  