<?php
/* Partendo da questa stringa $string = "c,i,n,q,u,e"; 
trasforma la stringa in un array con un elemento per carattere, */

	$array = ['c','i','n','q','u','e'];

/* infine crea un array associativo della forma: */
	
	$result = [
		'c' => 'c',
		'i' => 'i',
		'n' => 'n',
		'q' => 'q',
		'u' => 'u',
		'e' => 'e'
	];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $string = "c,i,n,q,u,e";
        //£ splitto la stringa
        $array = explode(',',$string);

        $result =[];

        foreach ($array as $key) {
            //!inserisco sia come chiave che come valore
            $result[$key]= $key;
            echo $key . ',';
        }
        var_dump($result)
    ?>
</body>
</html>