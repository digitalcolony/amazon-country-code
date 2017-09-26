<?php
    // SETUP: From the CloudFlare dashboard go to Network 
    // and scroll down to IP Geolocation. Confirm that this is turned on.
    $country_code = strtolower($_SERVER["HTTP_CF_IPCOUNTRY"]); //from cloudflare headers
    // $country_code = strtolower($_GET['q']); // for testing without VPN
    
    // default to USA store
    switch ($country_code) {
        case "ca":
            $amazon_code = "CA";
            break;
        case "ie":
        case "gb":
            $amazon_code = "UK";
            break;
        case "fr":
        case "be":
            $amazon_code = "FR";
            break;
        case "de":
            $amazon_code = 'DE';
            break;
        case "it":
            $amazon_code = "IT";
            break;
        default:
            $amazon_code = "US";
    }
?>
        	