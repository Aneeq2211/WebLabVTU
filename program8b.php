<?php 
$a = array(array(2,5,4),array(9,5,2),array(4,2,8));
$b = array(array(9,3,1),array(1,2,4),array(3,5,7));
$m=count($a);
$n=count($a[2]);
$p=count($b);
$q=count($b[2]);
echo "the first matrix:"."<br/>";

for($row = 0; $row < $m; $row++) {
    for ($col = 0; $col < $n; $col++)
    echo " ".$a[$row][$col];echo "<br/>";
}
echo "the second matrix:"."<br/>";
for ($row = 0; $row < $p; $row++) {
    for ($col = 0; $col < $q; $col++)
    echo " ".$b[$row][$col];echo "<br/>";
}
echo "the transpose for the first matrix is:"."<br/>";
for ($row = 0; $row < $m; $row++) {
    for ($col = 0; $col < $n; $col++)
    echo " ".$a[$col][$row];echo "<br/>";
}
if(($m===$p) and ($n===$q)) {
    echo "the addition of matrices is:"."<br/>";
    for ($row = 0; $row < 3; $row++) {
        for ($col = 0; $col < 3; $col++)
        echo " ".$a[$row][$col]+$b[$row][$col]." ";
         echo "<br/>";
        }
    }
    if($n===$p){
             echo " The multiplication of matrices: <br/>";$result=array();
    
for($i=0; $i < $m; $i++) {
    for($j=0; $j < $q; $j++){
        $result[$i][$j] = 0;
        for($k=0; $k < $n; $k++)
        $result[$i][$j] += $a[$i][$k] * $b[$k][$j];
        }
    }
    for ($row = 0; $row < $m; $row++) {
        for ($col = 0; $col < $q; $col++)
            echo " ".$result[$row][$col];
            echo "<br/>";
        }
    } 
?>