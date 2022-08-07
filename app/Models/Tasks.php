<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    public function status(){
        return $this->belongsTo(Status::class, 'status_id');
    }

    public function label(){
        return $this->belongsTo(Label::class, 'id');
    }

}
