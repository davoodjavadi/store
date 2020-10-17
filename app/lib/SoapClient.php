<?php

$MerchantID = '00000000000000000000000000'; //Required
$Amount = 1000; //Amount will be based on Toman - Required
$Description = 'توضیحات تراکنش تستی'; // Required
$Email = 'javadi.davood@gmail.Com'; // Optional
$Mobile = '09123456789'; // Optional
$CallbackURL = '/'; // Required


$client = new SoapClient('https://sandbox.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);

$result = $client->PaymentRequest(
    [
        'MerchantID' => $MerchantID,
        'Amount' => $Amount,
        'Description' => $Description,
        'Email' => $Email,
        'Mobile' => $Mobile,
        'CallbackURL' => $CallbackURL,
    ]
);

//Redirect to URL You can do it also by creating a form
if ($result->Status == 100) {
    Header('Location: https://sandbox.zarinpal.com/pg/StartPay/'.$result->Authority);
} else {
    echo'ERR: '.$result->Status;
}