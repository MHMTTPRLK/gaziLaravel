<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use SoapClient;

class SmsController extends Controller
{
   private $soapClient;
   public function __construct()
   {
       $this->soapClient=new SoapClient("http://soap.netgsm.com.tr:8080/Sms_webservis/SMS?wsdl");
   }
   public function sendPasswordWithMessage($gsm=array())
   {
       try {
            $password=mt_rand(100000,999999);
            $new_password=Hash::make($password);
            //User şifresi güncellendi
           $message='Yeni Şifreniz'.$password.'bu şifreyi sisteme girdikten sonra lütfen değiştirin';
           $this->soapClient->smsGonder1NV2([
              'username'=>'kullanıcı adı',
               'password'=>'şifreniz',
               'header'=>'Mehmet Parlak',
               'msg'=>$message,
               'gsm'=>$gsm,
               'filter' => '',
               'startdate'  => '',
               'stopdate'  => '',
               'encoding' => 'TR'
           ]);

       }
       catch (\Exception $error)
       {
           echo "Soap Hatasi Olustu: " . $error->getMessage();
       }
   }

   public function sendPasswordWithApi(Request $request)
   {

   }

}
