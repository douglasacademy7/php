<html>
	<header>
		<title>
			Teste de envio de parametros.
		</title>
	</header>

	<body>
		<?php
			$planetas = [
				"marte",
				"jupter",
				"terra",
				"urano",
				"netuno",
				"saturno",
				"venus",
				"mercurio"
			];
		?>
		
		<ul>
			<?php foreach( $planetas as $planeta) :?>
				<li>
					<a href = "get.php?planetas=<?php echo $planeta ?>"><?php echo $planeta ?></a>
				</li>
			<?php endforeach;?>
		</ul>
		
	</body>

</html>