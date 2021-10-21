<?php
/*
*	$ php -S 0.0.0.0:1337
*
*	$ curl "http://0.0.0.0:1337/?url=|id"
*/

system("whois " . $_GET["url"]);
