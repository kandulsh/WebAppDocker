<html>
<head>
<link rel="Stylesheet" type="text/css" href="external1.css">
</head>
<body>
<?php
$a= $_POST["a"];
$b= $_POST["b"];

$output= strcmp ( $a, $b);

if ($output==0)
{
echo "The strings are equal";
}
 elseif ($output>0)
{
echo "The string 1 is greater than string 2";
}
 else
{
echo "String 2 is greater than string 1";
}
?>

</body>
</html>