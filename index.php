<?php
require_once "vendor/mobiledetect/mobiledetectlib/src/MobileDetect.php";
$detect = new \Detection\MobileDetect;

if ( $detect->isMobile() ) {
    require_once "pages/mobile/home.php";
   }else{
    require_once "pages/desktop/home.php";
}

?>