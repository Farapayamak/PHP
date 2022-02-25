<?php

require('lib/soap.php');

$soapClient = new Soap_Client('username', 'password');

// print_r($soapClient->GetCredit());
echo $soapClient->GetCredit()->GetCreditResult;



?>