<!DOCTYPE html>
<html>
<head>
<link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#00aba9">
    <meta name="theme-color" content="#ffffff">
            <link rel="manifest" href="/manifest.json">
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Fale Conosco</title>
</head>
<style>
    @import url(https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic);
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-font-smoothing: antialiased;
  -moz-font-smoothing: antialiased;
  -o-font-smoothing: antialiased;
  font-smoothing: antialiased;
  text-rendering: optimizeLegibility;
}

body {
  font-family: "Roboto", Helvetica, Arial, sans-serif;
  font-weight: 100;
  font-size: 12px;
  line-height: 30px;
  color: #777;
  background: #26a69a;
}

.container {
  max-width: 400px;
  width: 100%;
  margin: 0 auto;
  position: relative;
}

#contact input[type="text"],
#contact input[type="email"],
#contact input[type="tel"],
#contact input[type="url"],
#contact textarea,
#contact button[type="submit"] {
  font: 400 12px/16px "Roboto", Helvetica, Arial, sans-serif;
}

#contact {
  background: #F9F9F9;
  padding: 25px;
  margin: 150px 0;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}

#contact h3 {
  display: block;
  font-size: 30px;
  font-weight: 300;
  margin-bottom: 10px;
}

#contact h4 {
  margin: 5px 0 15px;
  display: block;
  font-size: 13px;
  font-weight: 400;
}

fieldset {
  border: medium none !important;
  margin: 0 0 10px;
  min-width: 100%;
  padding: 0;
  width: 100%;
}

#contact input[type="text"],
#contact input[type="email"],
#contact input[type="tel"],
#contact input[type="url"],
#contact textarea {
  width: 100%;
  border: 1px solid #ccc;
  background: #FFF;
  margin: 0 0 5px;
  padding: 10px;
}

#contact input[type="text"]:hover,
#contact input[type="email"]:hover,
#contact input[type="tel"]:hover,
#contact input[type="url"]:hover,
#contact textarea:hover {
  -webkit-transition: border-color 0.3s ease-in-out;
  -moz-transition: border-color 0.3s ease-in-out;
  transition: border-color 0.3s ease-in-out;
  border: 1px solid #aaa;
}

#contact textarea {
  height: 100px;
  max-width: 100%;
  resize: none;
}

#contact button[type="submit"] {
  cursor: pointer;
  width: 100%;
  border: none;
  background: #26a69a;
  color: #FFF;
  margin: 0 0 5px;
  padding: 10px;
  font-size: 15px;
}

#contact button[type="submit"]:hover {
  background: #2bbbad;
  -webkit-transition: background 0.3s ease-in-out;
  -moz-transition: background 0.3s ease-in-out;
  transition: background-color 0.3s ease-in-out;
}

#contact button[type="submit"]:active {
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
}

.copyright {
  text-align: center;
}

#contact input:focus,
#contact textarea:focus {
  outline: 0;
  border: 1px solid #aaa;
}

::-webkit-input-placeholder {
  color: #888;
}

:-moz-placeholder {
  color: #888;
}

::-moz-placeholder {
  color: #888;
}

:-ms-input-placeholder {
  color: #888;
}

         
		.body {
			padding:0px;
			margin:0px;
		}
                
		#menu ul {
                    
                    display: flex;
                    justify-content: space-around;
                    list-style-type: none;
                    margin: 0;
                    padding: 0;
                    background-color:#26a69a;

		}
 
		#menu ul li { 
                    display: inline; 
                }
 
		#menu ul li a {
			background-color:#26a69a;
			color: #fff;
			text-decoration: none;
			border-bottom:1px solid #2bbbad;
			padding: 2px 10px;
			float:left;
		}
 
		#menu ul li a:hover {
			background-color:#2bbbad;
			color: #6D6D6D;
			border-bottom:1px solid #26a69a;
		}
</style>
<body>
        
     <div class="navbar-fixed">
        <div class="nav-wrapper"></div>

	<div id="menu" class="body">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="sobre.php">Sobre</a></li>
		</ul>
	</div>
    </div>
<div class="container">  
  <form id="contact" action="faleconosco1" method="post">
    <h3>Formulário de contato</h3>
    <h4>Nos contacte para orçamentos e dúvidas</h4>
    <fieldset>
      <input id="nome" name="nome" placeholder="Nome" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input id="email" name="email" placeholder="Email" type="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input id="telefonemovel"name="celular"placeholder="Telefone Celular" type="tel" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input id="telefonecomercial"name="comercial"placeholder="Telefone Comercial" type="tel" tabindex="4" required>
    </fieldset>
    <fieldset>
      <textarea id="mensagem" name="mensagem" placeholder="Escreva sua mensagem aqui" tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
      <button id="submit" name="submit" type="submit" id="contact-submit" data-submit="Enviando...">Enviar</button>
    </fieldset>
  </form>
</div>
</body>
</html>
//

<?php
/**
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $comercial = $_POST['comercial'];
    $mensagem = $_POST['mensagem'];
    
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "sistemairrigacao";
     
    $link = mysqli_connect($servidor, $usuario, $senha, $dbname);
    $query_select = "SELECT email FROM contato WHERE email = '$email'";
    $select = mysqli_query($link,$query_select);
    $array = mysqli_fetch_array($select);
    $logarray = $array['email'];
    
      if($logarray == $email){
 
        echo"<script language='javascript' type='text/javascript'>alert('Formulário já enviado, aguarde resposta!');window.location.href='faleconosco.php';</script>";
        die();
 
      }else{
     $query = "INSERT INTO contato (nome,email, celular,comercial,mensagem) VALUES ('$nome','$email','$celular','$comercial','$mensagem')";
        $insere = mysqli_query($link,$query);
        
        if($insere){
        echo"<script language='javascript' type='text/javascript'>alert('Formulário enviado com sucesso!');window.location.href='faleconosco.php'</script>";
        }else{
        echo"<script language='javascript' type='text/javascript'>alert('Não foi possível enviar o formulário');window.location.href='faleconosco.php'</script>";
        }
      }
   **/