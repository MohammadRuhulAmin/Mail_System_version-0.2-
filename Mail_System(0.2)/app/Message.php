<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Sender;
use App\Receiver;
class Message extends Model
{
    protected $fillable=[];
    public function sender(){
        return $this->belongsTo(Sender::class);
    }
    public function receiver(){
        return $this->belongsTo(Receiver::class);
    }
}
