<?php

namespace App\Http\Controllers;

use App\Models\agent;
use App\Models\bloodrequests;
use Illuminate\Http\Request;

class agentController extends Controller
{
    //
    public function index()
    {

        if (session()->has('agentId')) {
            $userId = session()->get('agentId');

            $data = agent::where('id', $userId)->first();
            $reqCount=bloodrequests::where("bloodGroupid",$data->bllodGroup_id)->get();
            return view('agentpanel.index', compact('data','reqCount'));

        } else {
            return view('Auth.login');
        }
    }

    public function bloodReq()
    {

        if (session()->has('agentId')) {
            $userId = session()->get('agentId');

            $data = agent::where('id', $userId)->first();
            $requestDonation = bloodrequests::with(['bloodGroup', 'Users'])->where("bloodGroupid",$data->bllodGroup_id)->get();

            return view('agentpanel.bloodreq', compact('requestDonation', 'data'));

        } else {
            return view('Auth.login');
        }

    }

    public function ReqStatus(Request $req, $id)
    {
        $statusData = bloodrequests::find($id);
        $statusData->status = $req->status;
        $statusData->save();
        flash()->success('requeste  status has been updated.');

        return back();
    }
      public function agentprofile()
    {

        if (session()->has('agentId')) {

            $userId = session()->get('agentId');
            $data = agent::with('bloodGroup')->where('id', $userId)->first();
            

            return view('agentpanel.profile', compact('data'));
        } else {

            return view('Auth.login');
        }
    }
      public function agentprofileUpdate(Request $req)
    {
        $userId = session()->get('agentId');
        $userData = agent::find($userId);
        $userData->update([
            'name' => $req->name,
            'email' => $req->email,
            'password' => $req->password ? Hash::make($req->password) : $userData->password,

        ]);
        flash()->success('The profile  is updated now.');

        return back();
    }
    public function logout(){
            session()->forget('agentId');
             return redirect('/');  
    }
}
