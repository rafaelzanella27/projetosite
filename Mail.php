<?php 
if (isset($_POST['txtdest']))
{
	$destino = $_POST['txtdest'];
	$assunto = 'Cliente Site';
	$nome = $_POST['txtnome'];
	$mailcont = $_POST['txtmailcont'];
	$fone = $_POST['txtfone'];
	$mensagem = $_POST['txtmsg'];

	if (PATH_SEPARATOR ==":") {
		$quebra = "\r\n";
	} else {
		$quebra = "\n";
	}
	$headers = "MIME-Version: 1.1".$quebra;
	$headers .= "Content-type: text/html; charset=utf-8".$quebra;
	$headers .= "From: atendimento@contabilidadebergen.com.br".$quebra; //E-mail do remetente
	$headers .= "Return-Path: atendimento@contabilidadebergen.com.br".$quebra; //E-mail do remetente
	$headers .= "Cc: $mailcont".$quebra;

	// Dados que serão enviados
	$corpo = "Formulário da página de contato" . "<br>";
	$corpo .= "Nome: " . $nome . " <br>";
	$corpo .= "Telefone: " . $fone . " <br>";
	$corpo .= "Email: " . $mailcont . " <br>";
	$corpo .= "Mensagem: " . $mensagem . " <br>";

	mail($destino, $assunto, $corpo, $headers, "-r". "atendimento@contabilidadebergen.com.br");
	print "Mensagem enviada com sucesso!";
}else{ ?>
   
<?php } ?>
