<?php
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$mensagem = $_POST['mensagem'];
		
        require 'vendor/autoload.php';

        $from = new SendGrid\Email(null, "admemail@gmail.com");
        $subject = "Mensagem de contato";
        $to = new SendGrid\Email(null, "catiacristina.santosrocha@gmail.com");
        $content = new SendGrid\Content("text/html", "Olá ALessandro, <br><br>Nova mensagem de contato<br><br>Nome: $nome<br>Email: $email <br>Mensagem: $mensagem");
      $mail = new SendGrid\Mail($from, $subject, $to, $content);
        
    //Necessário inserir a chave
    $apiKey = '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';
    $sg = new \SendGrid($apiKey);

     $response = $sg->client->mail()->send()->post($mail);
    echo "Mensagem enviada com sucesso"
    ;
		
?>
