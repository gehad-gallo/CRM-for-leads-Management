<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class PageController extends Controller
{


    public function home(){
        $coming_from_value = "";
        return view('home2', compact('coming_from_value'));
    }


    public function insertClient00(Request $request){
        //validation 
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|numeric',          
       ]);

        //insertation
        Client::create([
            'name' => $request->name,
            'phone' => $request->phone,
        ]);


        return redirect()->route('regestration.done');
    }


    public function index($id){
        $coming_from_value= $id;
    	return view('home', compact('coming_from_value'));
    }


    public function insertClient(Request $request, $id){
    	
    	//validation 
    	$request->validate([
            'name' => 'required|string|max:255',
		    'phone' => 'required|numeric',		    
       ]);

    	//insertation
    	Client::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'comming_from' => "landing/".$request->id,
        ]);


        return redirect()->route('regestration.done');
    }


    public function registerationDone(){

    	return view('registerationDone');
    }

    public function privacyPolicy(){
        return view('privacy_policy');
    }

    public function termsOfUse(){
        return view('terms_of_use');
    }
}
