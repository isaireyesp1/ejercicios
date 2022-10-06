
<?php
$lon = $_POST["num"];
$lo = $lon * $lon;
$m = 0;
 $j = 0;
  $r = 1;
for($i = 0; $i<$lo; $i++){
       if($m==$lon){
               echo "<br>";
               $m = 0;
               $j = $j+($lon+1);
            }else{  
            }
            if($i == $j ){
                    echo "&nbsp &nbsp"+$r;
                    $r = $r +2;
                }else{
                    echo "&nbsp &nbsp &nbsp";
                }
            $m++;
}

?>