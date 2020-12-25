<?php

namespace App\Models;

use Carbon\CarbonInterval;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Bildirim extends Model
{
    use HasFactory;

    protected $table = "bildirim";
    protected $fillable = [
        'bildirim_adi',
        'bildirim_son_tarih'
    ];

    protected $appends = ['remaining_time'];


    public function getRemainingTimeAttribute()
    {


        $bildirim_zaman=$this->bildirim_son_tarih;
        $simdikiZaman =  Carbon::now()->format('Y-m-d H:i:s');
        Carbon::setLocale('tr');
        //echo Carbon::getLocale();
      /*  echo $simdikiZaman.'<br>';
        echo $bildirim_zaman;
        die();*/

        $diffZaman=Carbon::parse($bildirim_zaman)->diffForHumans([
            'long'=>true,
            'parts' => 4,
            'join' => ', ', // join with commas
        ]);
        if($bildirim_zaman<$simdikiZaman)
        {
            return  $diffZaman.' Bildiirim Sona Erdi';
        }

        return $diffZaman;


    }
}
