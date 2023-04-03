<?php 
	
	$i = 50;
    $umidade = 0;
	while ($i < 100) {


	$umidade = $i += 10;

	echo $umidade."<br>";  
		sleep(1);

	}

	while ($i > 50) {

		sleep(10);
		$umidade = $i - 10;
	}

?>