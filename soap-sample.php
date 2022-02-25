<?php

require('lib/Soap_Client.php');

$soapClient = new Farapayamak\Soap_Client('username', 'password');

// print_r($soapClient->GetCredit());
echo $soapClient->GetCredit()->GetCreditResult;



?>