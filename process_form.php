<?php
ob_start();
@session_start();
require('Mail/Mail.php');

$type = filter_input(INPUT_POST, "type");


if($type == "contato")
{
      // pegando dados do input ja com filtro anti XSS
      $nome = filter_input(INPUT_POST, "nome");
      $email = filter_input(INPUT_POST, "email");
      $telefone = filter_input(INPUT_POST, "telefone");
      $messagem = filter_input(INPUT_POST, "messagem");

      // envio de e-mail
      $mailsend = new Mail($nome,$email,$messagem,$telefone);
      $mailsend->MailSend();
    
    
  
     // Criando uma seção de array de dados
     $_SESSION['dados'] = [
      'nome' => $nome,
      'email' => $email,
      'telefone' => $telefone,
      'message' => "E-mail Enviado com sucesso"
     ];
  
     // redirecionado para message
     header("location:message.php");
}
elseif ($type == "cadastro")
{
    // pegando dados do input ja com filtro anti XSS
    $nome = filter_input(INPUT_POST, "nome");
    $email = filter_input(INPUT_POST, "email");
    $telefone = filter_input(INPUT_POST, "telefone");
    $dt_nasc = filter_input(INPUT_POST, "dt_nasc");
    $cpf = filter_input(INPUT_POST, "cpf");
  

   // Criando uma seção de array  de dados
   $_SESSION['dados'] = [
    'nome' => $nome,
    'email' => $email,
    'telefone' => $telefone,
    'dt_nasc' => $dt_nasc,
    'cpf' => $cpf,
    'message' => "seus dados foi cadastro com sucesso"
   ];

   // redirecionado para message
   header("location:message.php");
}
else
{
    echo "Pagina Não Encontrada";
}