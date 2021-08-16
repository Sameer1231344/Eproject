<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

function counts($n) 
{ 
    
    for($j = 0; $j < $n + 1; $j++) 
            $table[$j] = 0; 
  
   
    $table[0] = 1; 
  
   
    for ($i = 3; $i <= $n; $i++) 
    $table[$i] += $table[$i - 3]; 
      
    for ($i = 5; $i <= $n; $i++) 
    $table[$i] += $table[$i - 5]; 
      
    for ($i = 10; $i <= $n; $i++) 
    $table[$i] += $table[$i - 10]; 
  
    return $table[$n]; 
} 
  

$n = 20; 
echo "Count for ";
echo($n);
echo (" is "); 
echo counts($n); 
  
$n = 13;
echo ("\n") ;
echo "Count for ";
echo($n);
echo (" is " ); 
echo counts($n); 
  

?>
</body>
</html>