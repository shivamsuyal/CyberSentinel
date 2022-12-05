<?php
require_once "vendor/mobiledetect/mobiledetectlib/src/MobileDetect.php";
$detect = new \Detection\MobileDetect;

if ( $detect->isMobile() ) {
    require_once "pages/mobile/register.php";
   }else{
    require_once "pages/desktop/register.php";
}

?>