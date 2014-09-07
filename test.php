<?php
$testing;
echo "is null?".is_null($testing);
echo "<br/>";
$testing=5;
echo "is an integer?".is_integer($testing);
echo "<br/>";
$testing="five";
echo "is a string".is_string($testing);
echo "<br/>";
$testing=array('apple','orange','pear');
echo "is an array".is_array($testing);
echo"<br/>";
?>