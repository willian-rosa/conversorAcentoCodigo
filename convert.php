<!DOCTYPE html>
<html charset="UTF-8">
	<body>
		<form method="post">
			<textarea name="text"></textarea>
			<input type="submit" value="Enviar" />
		</form>

		<?php
		
		require_once 'ConversorCodigo.php';

		if(isset($_POST['text'])){

			$string = utf8_encode($_POST['text']);
		
			$converte = new ConversorCodigo($string);

			echo 'HTML<br><pre>';
			echo $converte->converteHtml();
			echo '</pre><br><br>JavaScript<br><pre>';
			echo $converte->converteJs();
			echo '</pre>';
			
		}
		?>
</body>
</html>