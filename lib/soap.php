<?php


class Soap_Client {

    private static $SEND_ENDPOINT = 'http://api.payamak-panel.com/post/send.asmx?wsdl';

    private $username;
    private $password;

    function __construct($username, $password) {
        $this->username = $username;
        $this->password = $password;
    }



    // SEND webservice methods
    
    public function GetCredit() {
        return (new \SoapClient(self::$SEND_ENDPOINT))
            ->GetCredit(['username' => $this->username, 'password' => $this->password]);
    }

    public function GetDeliveries($recIds) {
        return (new \SoapClient(self::$SEND_ENDPOINT))
            ->GetDeliveries(['username' => $this->username, 'password' => $this->password,
            'recIds' => $recIds]);
    }

    public function GetDeliveries3($recId) {
        return (new \SoapClient(self::$SEND_ENDPOINT))
            ->GetDeliveries3(['username' => $this->username, 'password' => $this->password,
            'recId' => $recId]);
    }

    public function GetSmsPrice($irancellCount, $mtnCount, $from, $text) {
        return (new \SoapClient(self::$SEND_ENDPOINT))
            ->GetSmsPrice(['username' => $this->username, 'password' => $this->password,
            'irancellCount' => $irancellCount, 'mtnCount' => $mtnCount, 'from' => $from, 'text' => $text]);
    }

    public function SendByBaseNumber($text, $to, $bodyId) {
        return (new \SoapClient(self::$SEND_ENDPOINT))
            ->SendByBaseNumber(['username' => $this->username, 'password' => $this->password,
            'text' => $text, 'to' => $to, 'bodyId' => $bodyId]);
    }

    public function SendByBaseNumber2($text, $to, $bodyId) {
        return (new \SoapClient(self::$SEND_ENDPOINT))
            ->SendByBaseNumber2(['username' => $this->username, 'password' => $this->password,
            'text' => $text, 'to' => $to, 'bodyId' => $bodyId]);
    }

    public function SendByBaseNumber3($text, $to) {
        return (new \SoapClient(self::$SEND_ENDPOINT))
            ->SendByBaseNumber3(['username' => $this->username, 'password' => $this->password,
            'text' => $text, 'to' => $to]);
    }

    public function SendSimpleSMS($to, $from, $text, $isflash) {
        return (new \SoapClient(self::$SEND_ENDPOINT))
            ->SendSimpleSMS(['username' => $this->username, 'password' => $this->password,
            'to' => $to, 'from' => $from, 'text' => $text, 'isflash' => $isflash]);
    }

    public function SendSimpleSMS2($to, $from, $text, $isflash) {
        return (new \SoapClient(self::$SEND_ENDPOINT))
            ->SendSimpleSMS2(['username' => $this->username, 'password' => $this->password,
            'to' => $to, 'from' => $from, 'text' => $text, 'isflash' => $isflash]);
    }

    public function SendSms($to, $from, $text, $isflash, $udh, $recId) {
        return (new \SoapClient(self::$SEND_ENDPOINT))
            ->SendSms(['username' => $this->username, 'password' => $this->password,
            'to' => $to, 'from' => $from, 'text' => $text, 'isflash' => $isflash, 'udh' => $udh, 'recId' => $recId]);
    }

    public function SendMultipleSMS($to, $from, $text, $isflash, $udh, $recId) {
        return (new \SoapClient(self::$SEND_ENDPOINT))
            ->SendMultipleSMS(['username' => $this->username, 'password' => $this->password,
            'to' => $to, 'from' => $from, 'text' => $text, 'isflash' => $isflash, 'udh' => $udh, 'recId' => $recId]);
    }

    public function SendMultipleSMS2($to, $from, $text, $isflash, $udh, $recId) {
        return (new \SoapClient(self::$SEND_ENDPOINT))
            ->SendMultipleSMS2(['username' => $this->username, 'password' => $this->password,
            'to' => $to, 'from' => $from, 'text' => $text, 'isflash' => $isflash, 'udh' => $udh, 'recId' => $recId]);
    }

}


?>