<?php
$N1=$_POST["N1"];
$N2=$_POST["N2"];
for ($x = $N1+1; $x < $N2; $x++) {
    $c=0;
    for($i = 1; $i <=$x ; $i++){
        if($x%$i==0){
            $c++;
        }
    }
    if($c==2){
    echo "The number is: $x <br>";
    }
  }
?> 

