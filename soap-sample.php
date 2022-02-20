<?php

require('lib/soap.php');

$soapClient = new Soap_Client('apitest1400', 'api@234556@@');

// print_r($soapClient->GetCredit());
echo $soapClient->GetCredit()->GetCreditResult;



?>