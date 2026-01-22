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

class userController extends Controller
{
    //
    //     public function index()
    //     {
    //          if(session()->has('userId')){
    //       $userData = User::all()->where('id',"userId")->first();
    //   return view('website.index',compact('userData'));
    //         }
    //    else{
    //          return view('website.index');
    //    }
    //     }
    public function index()
    {
        if (session()->has('userId')) {

            $userId = session()->get('userId');
            $userData = User::where('id', $userId)->first();

            return view('website.index', compact('userData'));
        } else {

            return view('website.index', ['userData' => null]);
        }
    }

    public function about()
    {

        if (session()->has('userId')) {

            $userId = session()->get('userId');
            $userData = User::where('id', $userId)->first();

            return view('website.about', compact('userData'));
        } else {

            return view('website.about', ['userData' => null]);
        }
    }

    public function contact()
    {
        if (session()->has('userId')) {

            $userId = session()->get('userId');
            $userData = User::where('id', $userId)->first();

            return view('website.contact', compact('userData'));
        } else {

            return view('website.contact', ['userData' => null]);
        }

    }

    public function CreateContact(Request $req)
    {
        $Contacts = new contact;
        $Contacts->name = $req->input('name');
        $Contacts->Email = $req->input('Email');
        $Contacts->message = $req->input('message');

        $Contacts->save();
        flash()->success('Thankyou for Contact us !.');

        return back();
    }

    public function login()
    {
        return view('Auth.login');
    }

    public function userLogin(Request $req)
    {
        $checkEmail = User::where('email', $req->email)->first();
        $agentEmail = agent::where('email', $req->email)->first();
        if ($checkEmail) {
            if (Hash::check($req->password, $checkEmail->password)) {
                if ($checkEmail->status == 1) {
                    if ($checkEmail->Role == 0) {

                        session()->put('userId', $checkEmail->id);

                        return redirect('/');
                    } else {
                        session()->put('adminId', $checkEmail->id);

                        return redirect('/admin/index');
                    }

                } else {
                    flash()->error('your account is deactive by Admin.');
                }
            }

        } elseif ($agentEmail) {
            if (Hash::check($req->password, $agentEmail->password)) {
                if ($agentEmail->status == 1) {

                    session()->put('agentId', $agentEmail->id);

                    return redirect('/agent/index');
                }

            } else {
                flash()->error('your account is deactive by Admin.');
            }

        } else {
            flash()->error('login Fail.');
        }

        return back();
    }

    public function register()
    {

        return view('Auth.register');
    }

    public function addUser(Request $req)
    {
        $rN = rand(100000, 900000);

        $emailExisiting = user::all()->where('email', $req->email)->first();

        if ($emailExisiting) {
            flash()->error('email is already registered.');

            return back();
        } else {
            Hash::make($req->password);
            $req->verifedNumber = $rN;
            $req->status = 1;

            User::create([
                'name' => $req->name,
                'email' => $req->email,
                'password' => Hash::make($req->password),
                'verifedNumber' => rand(100000, 900000),
                'status' => 1,
                'Role' => 0,
            ]);
            flash()->success('The Account is created now.');

            return back();
        }
    }

    public function Userprofile()
    {

        if (session()->has('userId')) {

            $userId = session()->get('userId');
            $userData = User::where('id', $userId)->first();

            return view('website.profile', compact('userData'));
        } else {

            return view('Auth.login');
        }
    }

    public function userprofileUpdate(Request $req)
    {
        $userId = session()->get('userId');
        $userData = User::find($userId);
        $userData->update([
            'name' => $req->name,
            'email' => $req->email,
            'password' => $req->password ? Hash::make($req->password) : $userData->password,

        ]);
        flash()->success('The profile  is updated now.');

        return back();
    }

    public function bloodReq()
    {

        if (session()->has('userId')) {

            $userId = session()->get('userId');
            $userData = User::where('id', $userId)->first();
            $bloodGroups = bloodGroup::all()->where('status', 'A');

            return view('website.bloodReq', compact('userData', 'bloodGroups'));
        } else {

            return view('Auth.login');
        }
    }

    public function addbloodReq(Request $req)
    {
        if (session()->has('userId')) {

            $userId = session()->get('userId');
            $request = bloodrequests::create([
                'Reciever_id' => $userId,
                'bloodGroupid' => $req->bloodGroupid,
                'status' => 'pending',
                'address' => $req->message,

            ]);

            flash()->success('Thank for do request.');

            return back();

        } else {

            return view('Auth.login');
        }
    }

    public function logout()
    {

        // $userId = session()->get('userId');
        //  $request->session()->forget('userId');
        //  Session::forget('userId');
        session()->forget('userId');

        return redirect('/');
    }

    public function forgotPassword()
    {
        return view('Auth.forgetPassword');
    }

    public function updateforgotPassword(Request $req)
    {
        $findEmail = User::where('email', $req->email)->first();
        if ($findEmail) {
            $findEmail->update(['password' => Hash::make($req->password)]);
            flash()->success('update password !.');

            return back();
        } else {
            flash()->success('email is not found.');

            return back();
        }
    }

    public function statusReq()
    {

        if (session()->has('userId')) {

            $userId = session()->get('userId');
            $userData = User::where('id', $userId)->first();
            $bloodGroups = bloodGroup::all()->where('status', 'A');
            $requestDonation = bloodrequests::with(['bloodGroup', 'Users'])->where('Reciever_id', $userData->id)->get();

            return view('website.statusReq', compact('userData', 'requestDonation'));
        } else {

            return view('Auth.login');
        }
    }

    public function Faq()
    {
   $faqsdata = faq::all();
        if (session()->has('userId')) {

            $userId = session()->get('userId');
            $userData = User::where('id', $userId)->first();
         

            return view('website.faq', compact('userData', 'faqsdata'));
        } else {

            return view('website.faq', [
                'userData' => null,
                'faqsdata' => $faqsdata]);
        }
    }

}
