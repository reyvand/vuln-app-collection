<?php
/*
*	$ php -S 0.0.0.0:1337
*
*	http://0.0.0.0:1337/?name=<svg/onload=alert(1)>
*/

echo "Heloo, " . $_GET["name"];
