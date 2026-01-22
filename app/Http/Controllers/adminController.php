<?php

namespace App\Http\Controllers;

use App\Models\agent;
use App\Models\bloodGroup;
use App\Models\bloodrequests;
use App\Models\contact;
use App\Models\faq;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class adminController extends Controller
{
    //
        public function requestChart()
{
    // Har Blood Group ke liye total requests count karein
    // Example: A+ has 10 requests, B- has 5 requests


    return view('adminpanel.charts', compact('labels', 'counts'));
}
    public function index()
    {
        if (session()->has('adminId')) {
$groups = bloodGroup::withCount('bloodrequests')->get();

    $labels = $groups->pluck('group_name'); 
    $counts = $groups->pluck('bloodrequests_count');
            $userId = session()->get('adminId');
            $data = User::where('id', $userId)->first();
            $dataUser = User::all();
            $dataBlood = BloodGroup::all();
            $agentData = agent::all();
            $reqData = bloodrequests::all();
            $contactData = contact::all();

            return view('adminpanel.index', compact('data', 'dataUser', 'dataBlood', 'agentData', 'reqData', 'contactData','labels', 'counts'));
        } else {

            return view('Auth.login');
        }

    }

    public function blood_addFrom()
    {
        if (session()->has('adminId')) {

            $userId = session()->get('adminId');
            $data = User::where('id', $userId)->first();

            return view('adminpanel.addBloodgrpup', compact('data'));
        } else {

            return view('Auth.login');
        }

    }

    public function addBloodGroup(Request $req)
    {
        $bGroup = new bloodGroup;
        $bGroup->group_name = $req->input('group_name');
        $bGroup->status = $req->input('status');
        $bGroup->save();

        flash()->success('blood Group has been Added.');

        return redirect('admin/bloodGroup');
    }

    public function bloodShow()
    {
        if (session()->has('adminId')) {

            $userId = session()->get('adminId');
            $data = User::where('id', $userId)->first();
            $bloodGroups = bloodGroup::all();

            return view('adminpanel.bloodDetails', compact('bloodGroups', 'data'));
        } else {

            return view('Auth.login');
        }

    }

    public function deleteBloodGroup($id)
    {

        $bloodGroups = bloodGroup::find($id);
        $bloodGroups->delete();

        return redirect('admin/show-blood-group')->with('status', 'Blood Group Deleted Successfully');

    }

    public function blood_statusUpdate($id)
    {
        $bloodGroups = bloodGroup::find($id);
        if ($bloodGroups) {
            if ($bloodGroups->status == 'A') {
                $bloodGroups->status = 'D';
            } else {
                $bloodGroups->status = 'A';
            }
            $bloodGroups->save();
        }
        flash()->success('blood Group status has been updated.');

        return back();

    }

    // agent
    public function agentShow()
    {
        if (session()->has('adminId')) {

            $userId = session()->get('adminId');
            $agentDetails = agent::with('bloodGroup')->get();
            $data = User::where('id', $userId)->first();

            return view('adminpanel.agent', compact('agentDetails', 'data'));
        } else {

            return view('Auth.login');
        }

    }
    // agent

    public function agentForm()
    {
        if (session()->has('adminId')) {
            $userId = session()->get('adminId');
            $bloodGroups = bloodGroup::all()->where('status', 'A');
            $data = User::where('id', $userId)->first();

            return view('adminpanel.addAgent', compact('bloodGroups', 'data'));
        } else {
            return view('Auth.login');
        }
    }

    public function agentcrate(Request $req)
    {

        $emailExisiting = agent::all()->where('email', $req->email)->first();
        if ($emailExisiting) {
            flash()->error('email is already registered.');

            return back();
        } else {
            Hash::make($req->password);
            agent::create([
                'name' => $req->name,
                'email' => $req->email,
                'password' => Hash::make($req->password),
                'location' => $req->location,
                'status' => $req->status,
                'bllodGroup_id' => $req->bllodGroup_id]);
            flash()->success('The agent is created now.');

            return back();
        }

    }

    public function agentDel($id)
    {
        $findData = agent::find($id);
        $findData->delete();

        return back();

    }

    public function agent_statusUpdate($id)
    {
        $agentData = agent::find($id);
        if ($agentData) {
            if ($agentData->status == 1) {
                $agentData->status = 0;
            } else {
                $agentData->status = 1;
            }
            $agentData->save();
        }
        flash()->success('agent status has been updated.');

        return back();

    }

    // for contact us
    public function contactInfo()
    {
        if (session()->has('adminId')) {

            $userId = session()->get('adminId');
            $contactInfo = contact::all();
            $data = User::where('id', $userId)->first();

            return view('adminpanel.contactShow', compact('contactInfo', 'data'));
        } else {

            return view('Auth.login');
        }

    }

    public function delCon($id)
    {
        $data = contact::find($id);
        $data->delete();

        return back();
    }

    // for user info
    public function user_info()
    {

        if (session()->has('adminId')) {

            $userId = session()->get('adminId');
            $userInfo = User::all()->where('Role', 0);
            $data = User::where('id', $userId)->first();

            return view('adminpanel.userInfo', compact('userInfo', 'data'));
        } else {

            return view('Auth.login');
        }

    }

    public function deluser($id)
    {
        $data = User::find($id);
        $data->delete();

        return back();
    }

    public function user_statusUpdate($id)
    {
        $agentData = User::find($id);
        if ($agentData) {
            if ($agentData->status == 1) {
                $agentData->status = 0;
            } else {
                $agentData->status = 1;
            }
            $agentData->save();
        }
        flash()->success('user status has been updated.');

        return back();

    }

    public function blood_Req()
    {

        if (session()->has('adminId')) {

            $userId = session()->get('adminId');
            $data = User::where('id', $userId)->first();
            $requestDonation = bloodrequests::with(['bloodGroup', 'Users'])->get();

            return view('adminpanel.bloodReq', compact('requestDonation', 'data'));
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

    public function delReq($id)
    {
        $data = bloodrequests::find($id);
        $data->delete();

        return back();
    }

    public function Adminprofile()
    {

        if (session()->has('adminId')) {

            $userId = session()->get('adminId');
            $data = User::where('id', $userId)->first();

            return view('adminpanel.profile', compact('data'));
        } else {

            return view('Auth.login');
        }
    }

    public function adminprofileUpdate(Request $req)
    {
        $userId = session()->get('adminId');
        $userData = User::find($userId);
        $userData->update([
            'name' => $req->name,
            'email' => $req->email,
            'password' => $req->password ? Hash::make($req->password) : $userData->password,

        ]);
        flash()->success('The profile  is updated now.');

        return back();
    }

    public function logout()
    {
        session()->forget('adminId');

        return redirect('/');
    }

    public function faqdataShow()
    {
        if (session()->has('adminId')) {

            $userId = session()->get('adminId');
            $data = User::where('id', $userId)->first();
            $faqData = faq::all();

            return view('adminpanel.faqManagement', compact('data', 'faqData'));
        } else {

            return view('Auth.login');
        }

    }

    public function faqFromShow()
    {
        if (session()->has('adminId')) {

            $userId = session()->get('adminId');
            $data = User::where('id', $userId)->first();

            return view('adminpanel.faqCreate', compact('data'));
        } else {

            return view('Auth.login');
        }

    }

    public function faqCreated(Request $req)
    {
        $faq = new faq;
        $faq->answer = $req->answer;
        $faq->question = $req->question;
        $faq->save();
        flash()->success('The faq  is Created now.');

        return back();

    }

    public function delFaq($id)
    {
        $delId = faq::find($id);
        $delId->delete();

        return back();
    }

    public function findFaq($id)
    {

        if (session()->has('adminId')) {

            $userId = session()->get('adminId');
            $data = User::where('id', $userId)->first();
            $editId = faq::find($id);

            return view('adminpanel.faqEdit', compact('data', 'editId'));
        } else {

            return view('Auth.login');
        }

    }

    public function faqupdate($id, Request $req)
    {
        $faq = faq::find($id);
        $faq->answer = $req->answer;
        $faq->question = $req->question;
        $faq->save();
        flash()->success('The faq  is Updated now.');
        return redirect("/admin/faq");
    }

}
