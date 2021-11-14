<?php 
class safeguard{
    private $host="localhost";
    private $user="root";
    private $pass="";
    private $db="safeguard (2)";
    public $mysqli;
    
    public function __construct() {
        return $this->mysqli=new mysqli($this->host, $this->user, $this->pass, $this->db);
    }
    
    public function paymento($data){
        $fname=$data['name'];
        $email=$data['email'];
        $cNo=$data['cardNo'];
		$payAm=$data['payment'];
        $message=$data['message'];
        $q="insert into paymento set Full_Name='$fname', E_mail='$email', Card_Number='$cNo', Payment_Amount='$payAm', Payment_Reason='$message'";
       $data= $this->mysqli->query($q);
       if($data==true){
           $body="One message received from hubbunch contact us. details are below..<br> Full_Name='$fname',  E_mail='$email', Card_Number='$cNo',Payment_Amount='$payAm', Payment_Reason='$message'";
           return $this->sent_mail("info@hubbunch.com", "Message received from Hubbunch", $body);
       }
    }
    
    public function sent_mail($to,$subject,$body){
$mailFromName="HubBunch";
$mailFrom="info@hubbunch.com";

//Mail Header
$mailHeader = 'MIME-Version: 1.0'."\r\n";
$mailHeader .= "From: $mailFromName <$mailFrom>\r\n";
$mailHeader .= "Reply-To: $mailFrom\r\n";
$mailHeader .= "Return-Path: $mailFrom\r\n";
//$mailHeader .= "CC: $mailCC\r\n";
//$mailHeader .= "BCC: $mailBCC\r\n";
$mailHeader .= 'X-Mailer: PHP'.phpversion()."\r\n";
$mailHeader .= 'Content-Type: text/html; charset=utf-8'."\r\n";

//Email to Admin
if(mail($to, $subject, $body, $mailHeader)){
 return true;
 }else{
return false;
 }
    }
}


?>