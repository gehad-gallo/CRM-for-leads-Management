<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;
use App\Models\Update_History;

class Status extends Model
{
    use HasFactory;
    protected $table = "statuses";
    protected $guarded=[];



    public function clients(){
        return $this->hasMany('App\Models\Client','status_id','id');
    }

    public function getStatusName()
    {
        return $this->name;
    }
}
