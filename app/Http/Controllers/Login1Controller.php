<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class Login1Controller extends Controller
{

    private $soapClient;
    /*public function __construct()
    {
        $this->soapClient=new SoapClient("https://api.iletimerkezi.com/v1/send-sms/json");
    }*/

    public function index()
    {
        return view('login.index');
    }

    public function forgotPassword()
    {
        return  view('login.forgotPassword');
    }
    public function sendPasswordWithApi(Request $request)
    {


        $phone=$request->get('phone');
        $password=mt_rand(100000,999999);
        $new_password=Hash::make($password);
       // $user_phone=User::select('phone')->where()->get();
       if (User::where('phone', '=', $phone)->count() > 0) {

                        /* $ch = curl_init('https://textbelt.com/text');
                $data = array(
                    'phone' => '905396467730',
                    'message' =>  'Şifreniz Değiştirilmiş Yeni Şifreniz :'.$password.' Giriş Yaptıktan Sonra Şifrenizi Değiştiriniz...',
                    'key' => 'textbelt',
                );

                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

                $response = curl_exec($ch);
                curl_close($ch);*/
           $basic  = new \Nexmo\Client\Credentials\Basic('9caf5fcb', 'qRDa3BoiMfJqhRGd');
           $client = new \Nexmo\Client($basic);

           $message = $client->message()->send([
               'to' => '9'.$phone,
               'from' => 'ByNoGame',
             'text' => 'Sifreniz Degistirilmistir Yeni Sifreniz :'.$password.' Giris Yaptıktan Sonra Sifrenizi Degistiriniz...'
           ]);

           User::where('phone',$phone)
               ->update(['password'=>$new_password]);
           toastr()->success('Şifreniz SMS Olarak Gönderildi', 'İşlem Başarılı');
            return redirect()->back();

        }


    }
}
