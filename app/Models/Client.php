<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Status;
use App\Models\Update_History;

class Client extends Model
{
    use HasFactory;
    protected $table = "clients";
    protected $guarded=[];


    public function status(){
        return $this->belongsTo('App\Models\Status','status_id','id');
    }


    public function update_Histories(){
        return $this->hasMany('App\Models\Update_History','client_id','id');
    }


    public function getStatusName($id) {
        $status = Status::find($id);
        if ($status) {
            return $status->name;
        }
      return null;
    }


    public static function getClientStatus($status = null){
    	
    	  if ($status === null) {
		        return '';
		    }

    	switch ($status) {
    		case "1":
    			return 'new lead';
    		case "2":
    			return 'no answer on mobile';
    		case "3":
    			return 'not interested';
    		case "4":
    			return 'whats app connected';
    		case "5":
    			return 'ready to buy';
    		case "6":
    			return 'purchase done';
    		default:
    			return 'no Status';
    	}
    }

    public function getStatus()
    {
        return self::getStatusText($this->status);
    }

}
