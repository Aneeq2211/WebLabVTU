<html>
<body>
<p> the answer is:
<?php
if($_POST['group1'] == 'add')
{
echo $_POST['first'] + $_POST['second'];
}
else if($_POST['group1'] == 'subtract')
{
echo $_POST['first'] - $_POST['second'];
}
else if($_POST['group1'] == 'times')
{
echo $_POST['first'] * $_POST['second'];
}
else if($_POST['group1'] == 'divsion')
{
echo $_POST['first'] / $_POST['second'];
}
?>
</p>
</body>
</html>