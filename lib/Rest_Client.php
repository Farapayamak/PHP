<?php

namespace Farapayamak;


class Rest_Client
{
    private static $ENDPOINT = 'https://rest.payamak-panel.com/api/SendSMS/';
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
        $curl = curl_init();
    
        curl_setopt_array($curl, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_URL => self::$ENDPOINT . $route,
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
}

?>
