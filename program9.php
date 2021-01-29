<?php 
$allStates = "Mississippi Alabama Texas Massachusetts Kansas";

$inputArray = explode(' ',$allStates);
$outputArray = [];

$pattern = array('/xas$/', '/^k.*s$/i', '/^M.*s$/', '/a$/' );

echo "Original Array :<br>";
foreach ( $inputArray as $i => $value )
    print("STATES[$i]=$value<br>");

foreach($inputArray as $state)  {

    if(preg_match( $pattern[0], ($state)))
        $outputArray[0] = ($state);

    if(preg_match( $pattern[1], ($state)))
        $outputArray[1] = ($state);

    if(preg_match( $pattern[2], ($state)))
        $outputArray[2] = ($state);

    if(preg_match( $pattern[3], ($state)))
        $outputArray[3] = ($state);

}

sort($outputArray);
echo "<br><br>Resultant Array :<br>";
foreach ( $outputArray as $i => $value )
    print("STATES[$i]=$value<br>"); 
?>