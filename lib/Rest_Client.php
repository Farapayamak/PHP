<?php

namespace Farapayamak;


class Rest_Client
{
    private static $ENDPOINT = 'https://rest.payamak-panel.com/api/SendSMS/';
    private static $ENDPOINT_Smart = 'https://rest.payamak-panel.com/api/SmartSMS/';
    private $username;
    private $password;
    private $ignoreSSL;

    function __construct($username, $password, $makeSecure = false) {
        $this->username = $username;
        $this->password = $password;
        $this->ignoreSSL = !$makeSecure;
    }


    // data : array object
    private function post($route, $data)
    {
        $endpoint = self::$ENDPOINT;

        if(strpos($route, "SmartSMS") !== false) {
            $endpoint = str_replace("SendSMS/", "", self::$ENDPOINT);
        }

        $curl = curl_init();
    
        curl_setopt_array($curl, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_URL => $endpoint . $route,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => http_build_query($data),
            CURLOPT_SSL_VERIFYPEER => !$this->ignoreSSL
        ]);

        $response = curl_exec($curl);
        
        // to debug
        if(curl_errno($curl)){
            throw new \Exception(curl_error($curl));
        }
        
        curl_close($curl);        
        return json_decode($response, true);
    }


    private function postAsJson($route, $data)
    {
        $curl = curl_init();
    
        curl_setopt_array($curl, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_URL => self::$ENDPOINT_Smart . $route,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode($data),
            CURLOPT_SSL_VERIFYPEER => !$this->ignoreSSL,
            CURLOPT_HTTPHEADER => array('Content-Type: application/json')
        ]);

        $response = curl_exec($curl);
        
        // to debug
        if(curl_errno($curl)){
            throw new \Exception(curl_error($curl));
        }
        
        curl_close($curl);        
        return json_decode($response, true);
    }



    public function SendSMS($to, $from, $text, $isFlash) {
        $data = array('to' => $to, 'from' => $from, 'text' => $text, 'isFlash' => $isFlash, 
            'username' => $this->username, 'password' => $this->password);
        return $this->post(__FUNCTION__, $data);
    }
    
    public function GetDeliveries2($recId) {
        $data = array('recID' => $recId, 
            'username' => $this->username, 'password' => $this->password);
        return $this->post(__FUNCTION__, $data);
    }

    public function GetMessages($location, $from, $index, $count) {
        $data = array('location' => $location, 'from' => $from, 'index' => $index, 'count' => $count, 
            'username' => $this->username, 'password' => $this->password);
        return $this->post(__FUNCTION__, $data);
    }

    public function GetCredit() {
        $data = array( 
            'username' => $this->username, 'password' => $this->password);
        return $this->post(__FUNCTION__, $data);
    }

    public function GetBasePrice() {
        $data = array(
            'username' => $this->username, 'password' => $this->password);
        return $this->post(__FUNCTION__, $data);
    }

    public function GetUserNumbers() {
        $data = array(
            'username' => $this->username, 'password' => $this->password);
        return $this->post(__FUNCTION__, $data);
    }

    public function BaseServiceNumber($text, $to, $bodyId) {
        $data = array('text' => $text, 'to' => $to, 'bodyId' => $bodyId,
            'username' => $this->username, 'password' => $this->password);
        return $this->post(__FUNCTION__, $data);
    }

    
    
    public function SendSmartSMS($to, $text, $from, $fromSupportOne, $fromSupportTwo) {
        $data = array('to' => $to, 'text' => $text, 'from' => $from,
            'fromSupportOne' => $fromSupportOne, 'fromSupportTwo' => $fromSupportTwo,
            'username' => $this->username, 'password' => $this->password);
        return $this->post('SmartSMS/Send', $data);
    }

    public function SendMultipleSmartSMS($to, $text, $from, $fromSupportOne, $fromSupportTwo) {
        $data = array('to' => $to, 'text' => $text, 'from' => $from,
            'fromSupportOne' => $fromSupportOne, 'fromSupportTwo' => $fromSupportTwo,
            'username' => $this->username, 'password' => $this->password);
        return $this->postAsJson('SendMultiple', $data);
    }

    public function GetSmartSMSDeliveries2($id) {
        $data = array('Id' => $id,
            'username' => $this->username, 'password' => $this->password);
        return $this->post('SmartSMS/GetDeliveries2', $data);
    }

    public function GetSmartSMSDeliveries($ids) {
        $data = array('Ids' => $ids,
            'username' => $this->username, 'password' => $this->password);
        return $this->postAsJson('GetDeliveries', $data);
    }


}

?>
