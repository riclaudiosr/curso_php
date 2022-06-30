<?php
/*for($n = 1; $n <= 3; $n++){  
echo "$n <br>";}
?>

<br>
<br>

<?php
for($n1= 1; $n1 <= 3; $n1++){ 
    for($n2 = 1; $n2 <= 3; $n2++){
    echo " $n1 $n2 <br> ";
    } 
    echo "<br>";
}
?>

<br>
<br>

<?php
for($n1= 1; $n1 <= 3; $n1++){ 
    for($n2 = 1; $n2 <= 3; $n2++){
        if($n1 != $n2){
        echo "$n1 $n2 <br> ";
        }
    } 
   echo "<br>";
}*/
?>

<br>
<br>

<?php
for($n1= 1; $n1 <= 5; $n1++) { 
    for($n2 = 1; $n2 <= 5; $n2++)echo "<br>";{
        for($n3 = 1; $n3 <= 5; $n3++){
            if($n1 != $n2 && $n1 != $n3){
                if( $n2 != $n3){ 
                echo "$n1 $n2 $n3 <br> "; 
                        
                    
                } 
           }
        }
    } 
}
?>
<br>
<br>