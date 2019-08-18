<?php
$to='filizola.bruno@gmail.com';
$subject='Contato por Email - Site TooLss';
$message=$_POST['mensagem'];
$nome =$_POST['nome'];
$email =$_POST['email'];
$headers='From: '.$nome.' '.$email.';';
if(mail($to, $subject, $message, $headers))
{
	?>
    <script>alert('Mensagem enviada com sucesso!A TooLss agradece seu contato!');
    window.history.back();</script>
	<?php
}
else
{
	?>
	<script>alert('Erro ao enviar mensagem! Favor tentar novamente!');
	 window.history.back(); 
	</script>
	<?php
}
?>