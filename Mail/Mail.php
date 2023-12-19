<?php


class Mail
{

    protected $nome, $email, $mensagem, $telefone;

    public function __construct($nome, $email, $mensagem, $telefone)
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->mensagem = $mensagem;
        $this->telefone = $telefone;
    }

    public function MailSend()
    {

        // configuração de email
        // dominio
        ini_set("SMTP", "smtp.gmail.com");
        // porta do seu provedor de email
        ini_set("smtp_port", "587");
        // seu email
        ini_set("sendmail_from ", "talisson.souza@ba.estudante.senai.br");
        // pasta do servidor de email no xampp
        ini_set("sendmail_path ", "\C:\xampp\sendmail\sendmail.exe -t");

        //Variáveis
        $data_envio = date('d/m/Y');
        $hora_envio = date('H:i:s');

        //Compo E-mail
        $arquivo = "
    <html>
      <p><b>Nome: </b>$this->nome</p>
      <p><b>E-mail: </b>$this->email</p>
      <p><b>Telefone: </b>$this->telefone</p>
      <p><b>Mensagem: </b>$this->mensagem</p>
      <p>Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio</b></p>
    </html>
  ";

        //Emails para quem será enviado o formulário
        $destino = "talisson.souza@ba.estudante.senai.br";
        $assunto = "Aula senai";

        //Este sempre deverá existir para garantir a exibição correta dos caracteres
        $headers  = "MIME-Version: 1.0\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\n";
        $headers .= "From: $this->nome <$this->email>";

        //Enviar
        mail($destino, $assunto, $arquivo, $headers);
      
    }
}
