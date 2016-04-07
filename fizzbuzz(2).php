<?php
echo "Fizz Buzz 問題<br />";

$nums=[];
for($i=0;$i<=100 $i++){
  $remby3=mod($i,3);
  $remby5=mod($i,5);
  if($remby3==0 && $remby5==0){
    echo "FizzBuzz<br />";
  }else if($remBy3 == 0){
echo "Fizz<br/>\n";
}else if($remBy5 == 0){
echo "Buzz<br/>\n";
}else{
echo "$1<br/>\n";
}
}
print_r($nums);
 ?>
