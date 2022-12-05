<?php
// require_once "pages/mobile/home.php";
require_once "vendor/mobiledetect/mobiledetectlib/src/MobileDetect.php";
$detect = new \Detection\MobileDetect;

if ( $detect->isMobile() ) {
   }else{
    require_once "pages/desktop/home.php";
}

?>