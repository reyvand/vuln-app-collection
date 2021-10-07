<?php 

/*
    Deploy: php -S 0.0.0.0:8000 app1.php
    Deplpyed: localhost:8000 / ip:8000 
    Exploit: http://localhost:8000/?status=1
*/


$status = false; 


extract($_GET);


if($status == false){
    echo "Status unchanged";
}else{
    echo "Status changed ", $status;
}