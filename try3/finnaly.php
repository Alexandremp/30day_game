<?php
    function writeMsg() {
    echo "Hello world!";
    }
$subject = 'writeMsg' ;
$search = '' ;
$trimmed = str_replace($search, "", $subject) ;
echo $trimmed() ;
