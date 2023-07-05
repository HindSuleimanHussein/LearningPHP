<?php
$capitals=array("USA"=>"Washington D.C.", 
                "Japan" =>"Kyoto", 
                "South Korea"=>"Seoul",
                "India" =>"New Delhi" );

$capitals["USA"]="Las Vegas";      
$capitals["China"]="Beijing";  
array_pop($capitals); 
array_shift($capitals);
$keys=array_keys($capitals);  
$values=array_values($capitals);
$capitals=array_flip($capitals); // flips the values with the keys and vice versa
$capitals=array_reverse($capitals);
echo count($capitals). "<br>";
foreach($keys as $key){
  echo "{$key} <br>";
} 

foreach($values as $value){
  echo "{$value} <br>";
}  

foreach($capitals as $key=>$value){
  echo "{$key} = {$value} <br>";

}                
?>