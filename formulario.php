<?php
//PHP para verificar qual o idioma do html
  include('imports/idioma.php');
?>
<!DOCTYPE html>
<html lang="<?php echo $lang?>">
<?php
  //importando o head da pagina
    include('imports/head.php');
  ?>

<body>
    <!--importandoo menu da pagina -->
    <?php
      include('imports/menu.php');
    ?>
    
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Fomulário</title>
<h3 class="text-black bg-white text-center font-italic font-weight-bold mt-4">Seus dados foram enviados com sucesso</h3>
    <div class="text-center mt-2 mb-4">
<?php
	$nome = explode(" ", $_POST['nome']);
    $sobrenome = explode(" ", $_POST['sobrenome']);
	echo "Olá,<b> $nome[0] $sobrenome[0]</b>. <br><br>Sua mensagem foi entregue para a nossa equipe!<br><br>";
	if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))	 {
		echo 'Email correto';
	 }	else {
		echo 'Email incorreto, preencha novamente.';
	 }
?>
<br><br>
    <button type="button" value="voltar" class="btn btn-secondary btn-lg" onclick="window.history.back();">Voltar</button>
    </div>

        <!-- importando o footer da pagina -->
    <?php
      include('imports/footer.php');
    ?>
</body>

</html>