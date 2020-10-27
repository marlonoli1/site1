<?php 

if (isset($_POST["acao"])){ 

   $nome=$_POST["nome"]; 
   $telefone=$_POST["telefone"]; 
   $email=$_POST["email"]; 
   $msg=$_POST["mensagem"]; 

   echo "<p>Olá, ".$nome."</p>"; echo "<p>Seu email é: ".$email."</p>"; 

   echo "<p>Seu telefone é: ".$telefone."</p>"; 

   echo "<p>Sua mensagem é:<br/>".$msg."</p>"; 
} 

?>