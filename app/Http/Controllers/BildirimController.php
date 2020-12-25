<?php

namespace App\Http\Controllers;

use App\Models\Bildirim;
use DateTime;
use DateTimeZone;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class BildirimController extends Controller
{
   public function  index()
   {

        $bildirim=Bildirim::all();
        return $bildirim;

       /* $uzunluk=$bildirim->count();

       $tz_object = new DateTimeZone('Europe/Istanbul');
       $datetime = new DateTime();
       $datetime->setTimezone($tz_object);
       $now = $datetime->format('Y-m-d\ h:i:s');


           $data = date_diff(date_create($bildirim[0]->bildirim_son_tarih), date_create($now));
           if ($data->y == 0 && $data->m == 0 && $data->d == 0 ) {

               toastr()->warning('Bildirimin süresi doldu!');

           }

           else {
               $yil = $data->y;
               $ay = $data->m;
               $gun = $data->d;
               $saat = $data->h;
               $dakika = $data->i;
               $saniye = $data->s;

               $mesaj = $yil . " yıl " . $ay . " ay " . $gun . " gun " . $saat . " saat " . $dakika . " dakika " . $saniye . " saniye " . "kaldı.";
               return view('bildirim.bildirim');

           }
       }*/





   }
}
