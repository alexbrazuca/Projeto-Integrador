<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envia email</title>
</head>
<body>

<?php

$name = $_POST['nome'];
$assunto = "Solicitação de serviço";
$email = $_POST['email'];
$message = $_POST['mensagem']

?>

<?php

$to = "pimentatubosepvc@gmail.com"
$subject = "$assunto";
$message= "<strong></strong> $name<br> /><strong>E-mail:</strong>$email<br /><br /><strong></strong>Assunto:</strong>$assunto<br /><br /><strong>Mensagem:<strong> $message"
$header = "MIME-Version: 1.0\n";
$header .= "Content-type: text/html; charset=iso-8859-1\n";
$header .= "From: $email\n";
$enviado = mail($to, $subject, $message, $header);
if($enviado){
    echo 'Email enviado com sucesso';
}else{
    echo 'Não enviou';
}
?>
    
</body>
</html>

