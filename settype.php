<?php
$undecided=3.14;
echo "is ".$undecided."a double?".is_double($undecided)."<br/>";
settype($undecided, 'string');
echo "is ".$undecided."a string?".is_string($undecided)."<br/>";
?>