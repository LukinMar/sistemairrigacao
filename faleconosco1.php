
<?php
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input (INPUT_POST,'email', FILTER_SANITIZE_STRING);
    $celular = filter_input (INPUT_POST, 'celular',FILTER_SANITIZE_STRING);
    $comercial = filter_input (INPUT_POST, 'comercial', FILTER_SANITIZE_STRING);
    $mensagem = filter_input (INPUT_POST, 'mensagem', FILTER_SANITIZE_STRING);
    
 $servidor = "ec2-50-19-127-115.compute-1.amazonaws.com";
 $usuario = "btitzqmyqfdjfl";
 $senha = "
1b76f41706bfe03e2c7a367748d50dfa30513a4583cdd5e29a794a4c5f76a04a";
 $dbname = "de8msggjb5bkg";
     
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
      
?>