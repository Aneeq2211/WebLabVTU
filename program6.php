<html>
<head>
<title>Web Page Counter</title>
</head>
<body bgcolor="green" text="blue">
<?php
$file = "count.txt";
$handle = fopen($file, "r");
$count= fgets($handle);
$count =$count+1;
$handle = fopen($file, 'w') or die ('cannot open file: '.$file);
fwrite($handle, $count);
echo "This page has been viewed $count times";
?>
</body>
</html>