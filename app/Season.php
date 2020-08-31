<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    protected $fillable = ['driver_id', 'points'];

    public function player()
    {
        return $this->belongsTo('App\Player', 'driver_id', 'id');
    }

    public function getRankings($score)
    {
        switch ($score):
            case 1:
                $score = 25;
                break;
            case 2:
                $score = 18;
                break;
            case 3:
                $score = 15;
                break;
            case 4:
                $score = 12;
                break;
            case 5:
                $score = 10;
                break;
            case 6:
                $score = 8;
                break;
            case 7:
                $score = 6;
                break;
            case 8:
                $score = 4;
                break;
            case 9:
                $score = 2;
                break;
            case 10:
                $score = 1;
                break;
            default:
                $score = 0;
        endswitch;
        return $score;
    }
}
