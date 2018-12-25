<?php 
include("moonify/moonify.php"); //include the sdk
$moonify = new Moonify(); //declare a new moonify instance
$moonify->set("serviceID","3lgIBtTCTuDIUZNu8Xy5xnncGPYxH7Xzf5w_ICJW-iaras8kzkCE3pzMDcxv1jgYpr8E5_WHqLfVz5zNKJj7u3N3sfG25NrgeIeV2HiRo1Pk21Ee2CcvzOaetxScR8k2"); //set your private ID as authentication
$session​ ​=​ $moonify->session([​])->open(); //open a monetization session
if($moonify->error){
    echo $moonify->error; //show error
} else {
    echo $session->integrationCode(); //add Javascript code to set the monetization on client-side
}
?>
