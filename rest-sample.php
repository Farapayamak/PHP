<?php

    require('lib/rest.php');

    // SSL enabled version, use it after curl SSL configuration
    // $restClient = new RestClient('username', 'password', true);

    $restClient = new RestClient('username', 'password');

    $result = $restClient->SendSMS('09123456789', '5000xxx', 'test sms', false);
    // $result = $restClient->GetDeliveries2(66666);
    // $result = $restClient->GetMessages(1, '5000xxx', 0, 100);
    // $result = $restClient->GetCredit();
    // $result = $restClient->GetUserNumbers();
    // $result = $restClient->BaseServiceNumber('test sms', '09123456789', 2254);
    
    print_r($result);
    // echo $result['Value'];   // get specific member value

?>
