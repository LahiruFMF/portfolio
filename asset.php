<?php
/**
 * Created by PhpStorm.
 * User: Lahiru-FMF
 * Date: 8/1/2018
 * Time: 2:05 PM
 */

define("ENVIRONMENT", "development");
define("APP_PATH", "portfolio");

/* DO NOT DELETE BELOW PART */

function asset_path($filename, $dir)
{

    $site = base_url();
    $mode = "";

    /*
     * cache invalidation removed for js css libraries
     */

    if (is_null($dir)) {
        $final_url = $mode . $filename;
        return $final_url;
    }

    if (ENVIRONMENT == 'development') {
        $mode = 'dist/' . $dir . '/';
        return $mode . $filename;
    } else if (ENVIRONMENT == 'production') {
        $mode = 'public/' . $dir . '/';
    }

    $final_url = $mode . $filename . '?v='.getUIVersion();

    return $final_url;

}
function base_url(){
     return $_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/';
}
 function getUIVersion() {
     $site = base_url();
    if(ENVIRONMENT == "development"){
        return uniqid();
    }

    $uiVersion = file_get_contents('version');

    return $uiVersion;
}



