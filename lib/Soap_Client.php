<?php

namespace Farapayamak;

class Soap_Client {

    private static $SEND_ENDPOINT = 'http://api.payamak-panel.com/post/send.asmx?wsdl';
    private static $RECEIVE_ENDPOINT = 'http://api.payamak-panel.com/post/receive.asmx?wsdl';
    private static $USER_ENDPOINT = 'http://api.payamak-panel.com/post/users.asmx?wsdl';
    private static $VOICE_ENDPOINT = 'http://api.payamak-panel.com/post/voice.asmx?wsdl';
    private static $CONTACT_ENDPOINT = 'http://api.payamak-panel.com/post/contacts.asmx?wsdl';
    private static $SCHEDULE_ENDPOINT = 'http://api.payamak-panel.com/post/schedule.asmx?wsdl';
    private static $BULK_ENDPOINT = 'http://api.payamak-panel.com/post/newbulks.asmx?wsdl';

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



    // RECEIVE webservice methods

    public function ChangeMessageIsRead($msgIds) {
        return (new \SoapClient(self::$RECEIVE_ENDPOINT))
            ->ChangeMessageIsRead(['username' => $this->username, 'password' => $this->password,
            'msgIds' => $msgIds]);
    }

    public function GetInboxCount() {
        return (new \SoapClient(self::$RECEIVE_ENDPOINT))
            ->GetInboxCount(['username' => $this->username, 'password' => $this->password,
            'isRead' => $isRead]);
    }

    public function GetLatestReceiveMsg($sender, $receiver) {
        return (new \SoapClient(self::$RECEIVE_ENDPOINT))
            ->GetLatestReceiveMsg(['username' => $this->username, 'password' => $this->password,
            'sender' => $sender, 'receiver' => $receiver]);
    }

    public function GetMessages($location, $from, $index, $count) {
        return (new \SoapClient(self::$RECEIVE_ENDPOINT))
            ->GetMessages(['username' => $this->username, 'password' => $this->password,
            'location' => $location, 'from' => $from, 'index' => $index, 'count' => $count]);
    }

    public function GetMessagesAfterID($location, $from, $count, $msgId) {
        return (new \SoapClient(self::$RECEIVE_ENDPOINT))
            ->GetMessagesAfterID(['username' => $this->username, 'password' => $this->password,
            'location' => $location, 'from' => $from, 'count' => $count, 'msgId' => $msgId]);
    }

    public function GetMessagesFilterByDate($location, $from, $index, $count, $dateFrom, $dateTo, $isRead) {
        return (new \SoapClient(self::$RECEIVE_ENDPOINT))
            ->GetMessagesFilterByDate(['username' => $this->username, 'password' => $this->password,
            'location' => $location, 'from' => $from, 'index' => $index, 'count' => $count,
            'dateFrom' => $dateFrom, 'dateTo' => $dateTo, 'isRead' => $isRead]);
    }

    public function GetMessagesReceptions($msgId, $fromRows) {
        return (new \SoapClient(self::$RECEIVE_ENDPOINT))
            ->GetMessagesReceptions(['username' => $this->username, 'password' => $this->password,
            'msgId' => $msgId, 'fromRows' => $fromRows]);
    }

    public function GetMessagesWithChangeIsRead($location, $from, $index, $count, $isRead, $changeIsRead) {
        return (new \SoapClient(self::$RECEIVE_ENDPOINT))
            ->GetMessagesWithChangeIsRead(['username' => $this->username, 'password' => $this->password,
            'location' => $location, 'from' => $from, 'index' => $index, 'count' => $count,
            'isRead' => $isRead, 'changeIsRead' => $changeIsRead]);
    }

    public function GetOutBoxCount() {
        return (new \SoapClient(self::$RECEIVE_ENDPOINT))
            ->GetOutBoxCount(['username' => $this->username, 'password' => $this->password]);
    }

    public function RemoveMessages($location, $msgIds) {
        return (new \SoapClient(self::$RECEIVE_ENDPOINT))
            ->RemoveMessages(['username' => $this->username, 'password' => $this->password,
            'location' => $location, 'msgIds' => $msgIds]);
    }


    // USER webservice methods

    public function AddUser($productId, $descriptions, $mobileNumber, $emailAddress, $nationalCode, 
        $name, $family, $corporation, $phone, $fax, $address, $postalCode, $certificateNumber) {
        return (new \SoapClient(self::$USER_ENDPOINT))
            ->AddUser(['username' => $this->username, 'password' => $this->password,
            'productId' => $productId, 'descriptions' => $descriptions, 'mobileNumber' => $mobileNumber,
            'emailAddress' => $emailAddress, 'nationalCode' => $nationalCode, 'name' => $name,
            'family' => $family, 'corporation' => $corporation, 'phone' => $phone, 'fax' => $fax,
            'address' => $address, 'postalCode' => $postalCode, 'certificateNumber' => $certificateNumber]);
    }

    public function AddUserWithLocation($productId, $descriptions, $mobileNumber, $emailAddress, $nationalCode, 
    $name, $family, $corporation, $phone, $fax, $address, $postalCode, $certificateNumber, $country, $province, $city) {
        return (new \SoapClient(self::$USER_ENDPOINT))
            ->AddUserWithLocation(['username' => $this->username, 'password' => $this->password,
            'productId' => $productId, 'descriptions' => $descriptions, 'mobileNumber' => $mobileNumber,
            'emailAddress' => $emailAddress, 'nationalCode' => $nationalCode, 'name' => $name,
            'family' => $family, 'corporation' => $corporation, 'phone' => $phone, 'fax' => $fax,
            'address' => $address, 'postalCode' => $postalCode, 'certificateNumber' => $certificateNumber,
            'country' => $country, 'province' => $province, 'city' => $city
        ]);
    }

    public function AddUserWithMobileNumber($productId, $mobileNumber, $firstName, $lastName, $email) {
        return (new \SoapClient(self::$USER_ENDPOINT))
            ->AddUserWithMobileNumber(['username' => $this->username, 'password' => $this->password,
            'productId' => $productId, 'mobileNumber' => $mobileNumber, 'firstName' => $firstName,
            'lastName' => $lastName, 'email' => $email]);
    }

    public function AddUserWithMobileNumber2($productId, $mobileNumber, $firstName, $lastName, $userName, $email) {
        return (new \SoapClient(self::$USER_ENDPOINT))
            ->AddUserWithMobileNumber2(['username' => $this->username, 'password' => $this->password,
            'productId' => $productId, 'mobileNumber' => $mobileNumber, 'firstName' => $firstName,
            'lastName' => $lastName, 'userName' => $userName, 'email' => $email]);
    }

    public function AddUserWithUserNameAndPass($productId, $descriptions, $mobileNumber, $emailAddress, $nationalCode, 
    $name, $family, $corporation, $phone, $fax, $address, $postalCode, $certificateNumber, $targetUserName, $targetUserPassword) {
        return (new \SoapClient(self::$USER_ENDPOINT))
            ->AddUserWithUserNameAndPass(['username' => $this->username, 'password' => $this->password,
            'productId' => $productId, 'descriptions' => $descriptions, 'mobileNumber' => $mobileNumber,
            'emailAddress' => $emailAddress, 'nationalCode' => $nationalCode, 'name' => $name,
            'family' => $family, 'corporation' => $corporation, 'phone' => $phone, 'fax' => $fax,
            'address' => $address, 'postalCode' => $postalCode, 'certificateNumber' => $certificateNumber,
            'targetUserName' => $targetUserName, 'targetUserPassword' => $targetUserPassword
        ]);
    }

    public function AuthenticateUser() {
        return (new \SoapClient(self::$USER_ENDPOINT))
            ->AuthenticateUser(['username' => $this->username, 'password' => $this->password]);
    }

    public function ChangeUserCredit($amount, $description, $targetUsername, $GetTax) {
        return (new \SoapClient(self::$USER_ENDPOINT))
            ->ChangeUserCredit(['username' => $this->username, 'password' => $this->password,
            'amount' => $amount, 'description' => $description, 'targetUsername' => $targetUsername,
            'GetTax' => $GetTax]);
    }

    public function DeductUserCredit($amount, $description) {
        return (new \SoapClient(self::$USER_ENDPOINT))
            ->DeductUserCredit(['username' => $this->username, 'password' => $this->password,
            'amount' => $amount, 'description' => $description]);
    }

    public function ForgotPassword($mobileNumber, $emailAddress, $targetUsername) {
        return (new \SoapClient(self::$USER_ENDPOINT))
            ->ForgotPassword(['username' => $this->username, 'password' => $this->password,
            'mobileNumber' => $mobileNumber, 'emailAddress' => $emailAddress, 'targetUsername' => $targetUsername]);
    }

    public function GetCities($provinceId) {
        return (new \SoapClient(self::$USER_ENDPOINT))
            ->GetCities(['username' => $this->username, 'password' => $this->password,
            'provinceId' => $provinceId]);
    }

    public function GetEnExpireDate() {
        return (new \SoapClient(self::$USER_ENDPOINT))
            ->GetEnExpireDate(['username' => $this->username, 'password' => $this->password]);
    }

    public function GetExpireDate() {
        return (new \SoapClient(self::$USER_ENDPOINT))
            ->GetExpireDate(['username' => $this->username, 'password' => $this->password]);
    }

    public function GetProvinces() {
        return (new \SoapClient(self::$USER_ENDPOINT))
            ->GetProvinces(['username' => $this->username, 'password' => $this->password]);
    }

    public function GetUserBasePrice($targetUsername) {
        return (new \SoapClient(self::$USER_ENDPOINT))
            ->GetUserBasePrice(['username' => $this->username, 'password' => $this->password,
            'targetUsername' => $targetUsername]);
    }

    public function GetUserCredit($targetUsername) {
        return (new \SoapClient(self::$USER_ENDPOINT))
            ->GetUserCredit(['username' => $this->username, 'password' => $this->password,
            'targetUsername' => $targetUsername]);
    }

    public function GetUserCredit2() {
        return (new \SoapClient(self::$USER_ENDPOINT))
            ->GetUserCredit2(['username' => $this->username, 'password' => $this->password]);
    }

    public function GetUserDetails($targetUsername) {
        return (new \SoapClient(self::$USER_ENDPOINT))
            ->GetUserDetails(['username' => $this->username, 'password' => $this->password,
            'targetUsername' => $targetUsername]);
    }

    public function GetUserIsExist($targetUsername) {
        return (new \SoapClient(self::$USER_ENDPOINT))
            ->GetUserIsExist(['username' => $this->username, 'password' => $this->password,
            'targetUsername' => $targetUsername]);
    }

    public function GetUserNumbers() {
        return (new \SoapClient(self::$USER_ENDPOINT))
            ->GetUserNumbers(['username' => $this->username, 'password' => $this->password]);
    }

    public function GetUserTransactions($targetUsername, $creditType, $dateFrom, $dateTo, $keyword) {
        return (new \SoapClient(self::$USER_ENDPOINT))
            ->GetUserTransactions(['username' => $this->username, 'password' => $this->password,
            'targetUsername' => $targetUsername, 'creditType' => $creditType, 'dateFrom' => $dateFrom,
            'dateTo' => $dateTo, 'keyword' => $keyword]);
    }

    public function GetUserWallet() {
        return (new \SoapClient(self::$USER_ENDPOINT))
            ->GetUserWallet(['username' => $this->username, 'password' => $this->password]);
    }

    public function GetUserWalletTransaction($dateFrom, $dateTo, $count, $startIndex, $payType, $payLoc) {
        return (new \SoapClient(self::$USER_ENDPOINT))
            ->GetUserWalletTransaction(['username' => $this->username, 'password' => $this->password,
            'dateFrom' => $dateFrom, 'dateTo' => $dateTo, 'count' => $count, 'startIndex' => $startIndex,
            'payType' => $payType, 'payLoc' => $payLoc]);
    }

    public function GetUsers() {
        return (new \SoapClient(self::$USER_ENDPOINT))
            ->GetUsers(['username' => $this->username, 'password' => $this->password]);
    }

    public function RemoveUser($targetUsername) {
        return (new \SoapClient(self::$USER_ENDPOINT))
            ->RemoveUser(['username' => $this->username, 'password' => $this->password,
            'targetUsername' => $targetUsername]);
    }


    // VOICE webservice methods

    public function SendBulkSpeechText($title, $body, $receivers, $DateToSend, $repeatCount) {
        return (new \SoapClient(self::$VOICE_ENDPOINT))
            ->SendBulkSpeechText(['username' => $this->username, 'password' => $this->password,
            'title' => $title, 'body' => $body, 'receivers' => $receivers, 'DateToSend' => $DateToSend,
            'repeatCount' => $repeatCount]);
    }

    public function SendBulkVoiceSMS($title, $voiceFileId, $receivers, $DateToSend, $repeatCount) {
        return (new \SoapClient(self::$VOICE_ENDPOINT))
            ->SendBulkVoiceSMS(['username' => $this->username, 'password' => $this->password,
            'title' => $title, 'voiceFileId' => $voiceFileId, 'receivers' => $receivers,
            'DateToSend' => $DateToSend, 'repeatCount' => $repeatCount]);
    }

    public function UploadVoiceFile($title, $base64StringFile) {
        return (new \SoapClient(self::$VOICE_ENDPOINT))
            ->UploadVoiceFile(['username' => $this->username, 'password' => $this->password,
            'title' => $title, 'base64StringFile' => $base64StringFile]);
    }


    // CONTACTS webservice methods

    public function AddContact($groupIds, $firstname, $lastname, $nickname, $corporation, $mobilenumber,
        $phone, $fax, $birthdate, $email, $gender, $province, $city, $address, $postalCode, $additionaldate,
        $additionaltext, $descriptions) {
        return (new \SoapClient(self::$CONTACT_ENDPOINT))
            ->AddContact(['username' => $this->username, 'password' => $this->password,
            'groupIds' => $groupIds, 'firstname' => $firstname, 'lastname' => $lastname,
            'nickname' => $nickname, 'corporation' => $corporation, 'mobilenumber' => $mobilenumber,
            'phone' => $phone, 'fax' => $fax, 'birthdate' => $birthdate, 'email' => $email, 
            'gender' => $gender, 'province' => $province, 'city' => $city, 'address' => $address,
            'postalCode' => $postalCode, 'additionaldate' => $additionaldate, 
            'additionaltext' => $additionaltext, 'descriptions' => $descriptions
        ]);
    }

    public function AddContactEvents($contactId, $eventName, $eventType, $eventDate) {
        return (new \SoapClient(self::$CONTACT_ENDPOINT))
            ->AddContactEvents(['username' => $this->username, 'password' => $this->password,
            'contactId' => $contactId, 'eventName' => $eventName, 'eventType' => $eventType,
            'eventDate' => $eventDate]);
    }

    public function AddGroup($groupName, $Descriptions, $showToChilds) {
        return (new \SoapClient(self::$CONTACT_ENDPOINT))
            ->AddGroup(['username' => $this->username, 'password' => $this->password,
            'groupName' => $groupName, 'Descriptions' => $Descriptions, 'showToChilds' => $showToChilds]);
    }

    public function ChangeContact($contactId, $firstname, $lastname, $nickname, $corporation, $mobilenumber,
        $phone, $fax, $email, $gender, $province, $city, $address, $postalCode, $contactStatus,
        $additionaltext, $descriptions) {
        return (new \SoapClient(self::$CONTACT_ENDPOINT))
            ->ChangeContact(['username' => $this->username, 'password' => $this->password,
            'contactId' => $contactId, 'firstname' => $firstname, 'lastname' => $lastname,
            'nickname' => $nickname, 'corporation' => $corporation, 'mobilenumber' => $mobilenumber,
            'phone' => $phone, 'fax' => $fax, 'email' => $email, 
            'gender' => $gender, 'province' => $province, 'city' => $city, 'address' => $address,
            'postalCode' => $postalCode, 'contactStatus' => $contactStatus, 
            'additionaltext' => $additionaltext, 'descriptions' => $descriptions
        ]);
    }

    public function ChangeGroup($groupId, $groupName, $Descriptions, $showToChilds, $groupStatus) {
        return (new \SoapClient(self::$CONTACT_ENDPOINT))
            ->ChangeGroup(['username' => $this->username, 'password' => $this->password,
            'groupId' => $groupId, 'groupName' => $groupName, 'Descriptions' => $Descriptions,
            'showToChilds' => $showToChilds, 'groupStatus' => $groupStatus]);
    }

    public function CheckMobileExistInContact($mobileNumber) {
        return (new \SoapClient(self::$CONTACT_ENDPOINT))
            ->CheckMobileExistInContact(['username' => $this->username, 'password' => $this->password,
            'mobileNumber' => $mobileNumber]);
    }

    public function GetContactEvents($contactId) {
        return (new \SoapClient(self::$CONTACT_ENDPOINT))
            ->GetContactEvents(['username' => $this->username, 'password' => $this->password,
            'contactId' => $contactId]);
    }

    public function GetContacts($groupId, $keyword, $from, $count) {
        return (new \SoapClient(self::$CONTACT_ENDPOINT))
            ->GetContacts(['username' => $this->username, 'password' => $this->password,
            'groupId' => $groupId, 'keyword' => $keyword, 'from' => $from, 'count' => $count]);
    }

    public function GetContactsByID($contactId, $status) {
        return (new \SoapClient(self::$CONTACT_ENDPOINT))
            ->GetContactsByID(['username' => $this->username, 'password' => $this->password,
            'contactId' => $contactId, 'status' => $status]);
    }

    public function GetGroups() {
        return (new \SoapClient(self::$CONTACT_ENDPOINT))
            ->GetGroups(['username' => $this->username, 'password' => $this->password]);
    }

    public function MergeGroups($originGroupId, $destinationGroupId, $deleteOriginGroup) {
        return (new \SoapClient(self::$CONTACT_ENDPOINT))
            ->MergeGroups(['username' => $this->username, 'password' => $this->password,
            'originGroupId' => $originGroupId, 'destinationGroupId' => $destinationGroupId,
            'deleteOriginGroup' => $deleteOriginGroup]);
    }

    public function RemoveContact($mobilenumber) {
        return (new \SoapClient(self::$CONTACT_ENDPOINT))
            ->RemoveContact(['username' => $this->username, 'password' => $this->password,
            'mobilenumber' => $mobilenumber]);
    }

    public function RemoveContactByContactID($contactId) {
        return (new \SoapClient(self::$CONTACT_ENDPOINT))
            ->RemoveContactByContactID(['username' => $this->username, 'password' => $this->password,
            'contactId' => $contactId]);
    }

    public function RemoveGroup($groupId) {
        return (new \SoapClient(self::$CONTACT_ENDPOINT))
            ->RemoveGroup(['username' => $this->username, 'password' => $this->password,
            'groupId' => $groupId]);
    }



    // SCHEDULE webservice methods

    public function AddNewMultipleSchedule($to, $from, $text, $isflash, $scheduleDateTime, $period) {
        return (new \SoapClient(self::$SCHEDULE_ENDPOINT))
            ->AddNewMultipleSchedule(['username' => $this->username, 'password' => $this->password,
            'to' => $to, 'from' => $from, 'text' => $text, 'isflash' => $isflash, 
            'scheduleDateTime' => $scheduleDateTime, 'period' => $period]);
    }

    public function AddNewUsance($to, $from, $text, $isflash, $scheduleStartDateTime, $countrepeat,
        $scheduleEndDateTime, $periodType) {
        return (new \SoapClient(self::$SCHEDULE_ENDPOINT))
            ->AddNewUsance(['username' => $this->username, 'password' => $this->password,
            'to' => $to, 'from' => $from, 'text' => $text, 'isflash' => $isflash, 
            'scheduleStartDateTime' => $scheduleStartDateTime, 'countrepeat' => $countrepeat,
            'periodType' => $periodType]);
    }

    public function AddSchedule($to, $from, $text, $isflash, $scheduleDateTime, $period) {
        return (new \SoapClient(self::$SCHEDULE_ENDPOINT))
            ->AddSchedule(['username' => $this->username, 'password' => $this->password,
            'to' => $to, 'from' => $from, 'text' => $text, 'isflash' => $isflash, 
            'scheduleDateTime' => $scheduleDateTime, 'period' => $period]);
    }

    public function GetScheduleDetails($scheduleId) {
        return (new \SoapClient(self::$SCHEDULE_ENDPOINT))
            ->GetScheduleDetails(['username' => $this->username, 'password' => $this->password,
            'scheduleId' => $scheduleId]);
    }

    public function GetScheduleStatus($scheduleId) {
        return (new \SoapClient(self::$SCHEDULE_ENDPOINT))
            ->GetScheduleStatus(['username' => $this->username, 'password' => $this->password,
            'scheduleId' => $scheduleId]);
    }

    public function RemoveSchedule($scheduleId) {
        return (new \SoapClient(self::$SCHEDULE_ENDPOINT))
            ->RemoveSchedule(['username' => $this->username, 'password' => $this->password,
            'scheduleId' => $scheduleId]);
    }



    // BULK webservice methods

    public function AddNumberBulk($from, $title, $messages, $receivers, $DateToSend) {
        return (new \SoapClient(self::$BULK_ENDPOINT))
            ->AddNumberBulk(['username' => $this->username, 'password' => $this->password,
            'from' => $from, 'title' => $title, 'messages' => $messages, 'receivers' => $receivers,
            'DateToSend' => $DateToSend]);
    }

    public function BulkReception($bulkId, $maximumRows, $startRowIndex) {
        return (new \SoapClient(self::$BULK_ENDPOINT))
            ->BulkReception(['username' => $this->username, 'password' => $this->password,
            'bulkId' => $bulkId, 'maximumRows' => $maximumRows, 'startRowIndex' => $startRowIndex]);
    }

    public function BulkReceptionCount($bulkId) {
        return (new \SoapClient(self::$BULK_ENDPOINT))
            ->BulkReceptionCount(['username' => $this->username, 'password' => $this->password,
            'bulkId' => $bulkId]);
    }

    public function GetBulkDeliveries($recIds) {
        return (new \SoapClient(self::$BULK_ENDPOINT))
            ->GetBulkDeliveries(['username' => $this->username, 'password' => $this->password,
            'recIds' => $recIds]);
    }

    public function GetBulkDeliveries2($recId) {
        return (new \SoapClient(self::$BULK_ENDPOINT))
            ->GetBulkDeliveries2(['username' => $this->username, 'password' => $this->password,
            'recId' => $recId]);
    }

    public function GetBulkDetails($bulkdId) {
        return (new \SoapClient(self::$BULK_ENDPOINT))
            ->GetBulkDetails(['username' => $this->username, 'password' => $this->password,
            'bulkdId' => $bulkdId]);
    }

}


?>