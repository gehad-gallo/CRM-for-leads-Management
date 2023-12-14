<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;

class Update_History extends Model
{
    use HasFactory;
    protected $table = "update_histories";
    protected $guarded=[];

 	public $timestamps = true;

    public function client(){
    	return $this->belongsTo('App\Models\Client','client_id','id');
    }

	public function status()
    {
        return $this->belongsTo(Status::class, 'status_id');
    }

}
