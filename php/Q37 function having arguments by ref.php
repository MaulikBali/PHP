<?php
function selfMultiply(&$number)
{
$number*=$number;
return $number;
}
$mynum=5;
echo $mynum;
echo"<br>";
selfMultiply($mynum);
echo $mynum;

echo("<br>This program is written by Maulik Bali<br>ERPID-0221BCA026");

?>