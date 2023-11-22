<?php
$membres=[
	['dan',10,'danielciroy87@gmail.com'],
	['ben',20,'benaw@gmail.com'],
	['marc',30,'marc@gmail.com']
];
/*
echo $membres[0][0].' a '.$membres[0][1].' ans et som mail adress est: '.$membres[0][2].'<br/>';
echo $membres[1][0].' a '.$membres[1][1].' ans et som mail adress est: '.$membres[1][2].'<br/>';
echo $membres[2][0].' a '.$membres[2][1].' ans et som mail adress est: '.$membres[2][2].'<br/>';
*/

/*
for($ligne=0;$ligne<3;$ligne++){
	$membre_no=$ligne+1;
	echo 'membre numero '.$membre_no.'<br/>';
	echo'<ul>';
	for($colonne=0;$colonne<3;$colonne++){
	    echo '<li>'. $membres[$ligne][$colonne].'</li>';
	}
       '</ul>';
}
?>
*/

for($ligne=0;$ligne<3;$ligne++){
	for($colonne=0;$colonne<3;$colonne++){
		echo $membres[$ligne][$colonne].'<br/><br/>';
	}
}