<?php

namespace App\Http\Controllers; 
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\Client;
use App\Models\Status;
use App\Models\Update_History;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Collection;
use Illuminate\Pagination\Paginator;
use Carbon\Carbon;

class AdminController extends Controller
{
	use AuthenticatesUsers;
	
    
    public function login(){
    	return view('admin.login');
    }


    public function getLogin(Request $request){

    	$request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended()->route('dashboard2')
                        ->withSuccess('You have Successfully logged in');
        }

		return back()->withInput($request->only('email'))->with('message', 'Email or password is wrong');

	}


    public function adminDashboard(){

    	$all_Clients = Client::select('id','name','phone','created_at')->paginate(20);
    	return view('admin.dashboard',compact('all_Clients'));
    }


    public function deleteClient($id){
        $client = Client::find($id);
        $client->delete();
        return redirect()->route('dashboard');
    }


    public function gitLogout(){
    	$gaurd = $this->getGaurd();
        $gaurd->logout();

        return redirect()->route('admin.login');
    }

    private function getGaurd()
    {
        return auth();
    }






    public function getDashboard(){
        $clients = Client::get()->where('is_active',1);
        $clients_no_answer = Client::where('status_id',2)->where('is_active',1)->get();
        $clients_ont_interested = Client::where('status_id',3)->where('is_active',1)->get();
        $clients_whats_app_connectd = Client::where('status_id',4)->where('is_active',1)->get();
        $clients_ready_to_buy = Client::where('status_id',5)->where('is_active',1)->get();
        $clients_purchase_done = Client::where('status_id',6)->where('is_active',1)->get();  

        return view('admin.dashboard2',compact('clients','clients_no_answer','clients_ont_interested','clients_whats_app_connectd','clients_ready_to_buy','clients_purchase_done'));
    }

    public function getAllLeads(){
        $clients = Client::where('is_active',1)->get();
        return view('admin.all_leads',['clients' => $clients->toQuery()->paginate(20)]);
    }


    public function getLeads($id)
    {
        if ($id == "all-leads") {
            $clients = Client::where('is_active',1)->get();
            $leads_title = "- all leads";
            return view('admin.leads', ['clients' => $clients->toQuery()->paginate(20),
                                        'leads_title'=>$leads_title]);
        
        } elseif ($id == "new-lead") {
            $clients = Client::where('status_id',1)->where('is_active',1)->get();

            
            $leads_title = "- New leads";
            if ($clients->isEmpty()) {
                return view('admin.leads', ['message' => 'There is no new leads',
                                            'leads_title'=>$leads_title]);
            }else{
                return view('admin.leads', ['clients' => $clients->toQuery()->paginate(20),
                                            'leads_title'=>$leads_title]);
            }
            
        } elseif ($id == "no-answer") {
            $clients = Client::where('status_id', 2)->where('is_active',1)->get();
            $leads_title = "- No answer";
            if ($clients->isEmpty()) {
                return view('admin.leads', ['message' => 'There is no leads have no answer status',
                                            'leads_title'=>$leads_title]);
            }else{
                return view('admin.leads', ['clients' => $clients->toQuery()->paginate(20),
                                            'leads_title'=>$leads_title]);
            }

        } elseif ($id == "not-interested") {
            $clients = Client::where('status_id', 3)->where('is_active',1)->get();
            $leads_title = "- Not interested";
            if ($clients->isEmpty()) {
                return view('admin.leads', ['message' => 'There is no leads have not interested status',
                                            'leads_title'=>$leads_title]);
            }else{
                return view('admin.leads', ['clients' => $clients->toQuery()->paginate(20),
                                            'leads_title'=>$leads_title]);
            }

        } elseif ($id == "whats-app-connected") {
            $clients = Client::where('status_id', 4)->where('is_active',1)->get();
            $leads_title = "- What app connected";
            if ($clients->isEmpty()) {
                return view('admin.leads', ['message' => 'There is no leads have whats app connected status',
                                            'leads_title'=>$leads_title]);
            }else{
                return view('admin.leads', ['clients' => $clients->toQuery()->paginate(20),
                                            'leads_title'=>$leads_title]);
            }

        } elseif ($id == "ready-to-buy") {
            $clients = Client::where('status_id', 5)->where('is_active',1)->get(); 
            $leads_title = "- Ready to buy";
            if ($clients->isEmpty()) {
                return view('admin.leads', ['message' => 'There is no leads have ready to buy status',
                                            'leads_title'=>$leads_title]);
            }else{
                return view('admin.leads', ['clients' => $clients->toQuery()->paginate(20),
                                            'leads_title'=>$leads_title]);
            }
        } elseif ($id == "purchase-done") {
            $clients = Client::where('status_id', 6)->where('is_active',1)->get();
            $leads_title = "- purchase done";
            if ($clients->isEmpty()) {
                return view('admin.leads', ['message' => 'There is no leads have purchase done status',
                                            'leads_title'=>$leads_title]);
            }else{
                return view('admin.leads', ['clients' => $clients->toQuery()->paginate(20),
                                            'leads_title'=>$leads_title]);
            }
        } elseif ($id == "no-status") {
            $clients = Client::where('status_id', null)->where('is_active',1)->get();
            $leads_title = "- No status";
            if ($clients->isEmpty()) {
                return view('admin.leads', ['message' => 'There is no leads no status',
                                            'leads_title'=>$leads_title]);
            }else{
                return view('admin.leads', ['clients' => $clients->toQuery()->paginate(20),
                                            'leads_title'=>$leads_title]);
            }
        }

        // Default case if none of the conditions match
        return abort(404);
    }



    public function gettTrashedLeads(){
        $leads = Client::where('is_active', 0)->get();
        if ($leads->isEmpty()) {
            return view('admin.trash', ['message' => 'There is no trashed leads']);
        }else{
            return view('admin.trash', ['leads' => $leads->toQuery()->paginate(20)]);
        }
    }



    public function deleteLead($id){
        $lead = Client::find($id);
        if ($lead) {
            $lead->update(['is_active'=>0,]);
            return redirect()->back()->with(['success' => 'Lead moved to Trash!']);
        }else{

        }
    }


    public function activateClient($id){
        $client = Client::find($id);
        $client->update(['is_active'=>1,]);
        return redirect()->back()->with(['success' => 'Lead activated again successfully!']);
    }


    public function editLead($id){
        $lead = Client::find($id);
        if($lead){
            $current_status= $lead->status;
            $current_status_name = $lead->status->name;

            $all_statuses = Status::get();

            // all update histories for this client 
            $histories = $lead->update_Histories()->select('status_id', 'created_at')->get();

            // make every history like (2 days before) etc
            $current_time = Carbon::now()->format('Y-m-d H:i');
            $diff_for_all_history = [];

            if ($histories) {
                foreach ($histories as $history) {

                    $humanReadableDiff = Carbon::parse($history->created_at)->diffForHumans($current_time); 
                    $diff_for_all_history[] = $humanReadableDiff;
                }
            }

            return view('admin.edit-lead',['lead'=>$lead,
                                        'all_statuses'=>$all_statuses,
                                        'current_status'=>$current_status,
                                        'histories'=>$histories,
                                        'diff_for_all_history'=>$diff_for_all_history]);
        }else{
            return redirect()->back();
        }
    }



    public function saveEditLead(Request $request, $id)
    {
        // validation
        $request->validate([
            'status_id' => 'required',
        ]);

        $client = Client::find($id);
        $current_status = $client->status->id;

        if ($request->status_id == $current_status) {
            return redirect()->back()->with(['error' => 'The lead already has this status']);
        }

        // Update only the status_id, not the entire $request->all()
        $client->update(['status_id' => $request->status_id]);

        Update_History::create([
            'client_id' => $request->id,
            'status_id' => $request->status_id,
            'created_at' => now(),
        ]);

        return redirect()->back()->with(['success' => 'Lead updated successfully!']);
    }

    public function addStatus(){
        return view('admin.add_status');
    }


    public function saveAddStatus(Request $request)
{
    // Validation
    $request->validate([
        'status_name' => 'required',
    ]);

    try {
        // Create status
        Status::create([
            'name' => $request->status_name,
        ]);

        return redirect()->back()->with(['success' => 'Status added successfully!']);
    } catch (\Exception $e) {
        // Handle the exception, e.g., log it or redirect with an error message
        return redirect()->back()->with(['error' => 'Error adding status. Please try again.']);
    }
}

}
