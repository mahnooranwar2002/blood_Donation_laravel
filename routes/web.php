<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\userController;
use App\Http\Controllers\agentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [userController::class, 'index'])->name('home');
Route::get('/website/about', [userController::class, 'about'])->name('about');
Route::get('/website/contact', [userController::class, 'contact'])->name('contact');
Route::get('/website/login', [userController::class, 'login'])->name('website-Login');
Route::get('/website/register', [userController::class, 'register'])->name('website-register');
Route::post('/website/create-contact', [userController::class, 'CreateContact'])->name('createcontact');
Route::post('/website/userCreate',[userController::class, 'addUser'])->name('userCreate');
Route::post('/website/loginUser',[userController::class, 'userLogin'])->name('userLogin');
// profile
Route::get('/website/profile', [userController::class, 'Userprofile'])->name('website-Userprofile');
Route::post("/userprofileUpdate",[userController::class, 'userprofileUpdate'])->name('website-UserprofileEdited');
Route::get('/website/request', [userController::class, 'bloodReq'])->name('website-bloodReq');
Route::get('/website/statusrequest', [userController::class, 'statusReq'])->name('website-stausReq');

Route::post('/website/addReq', [userController::class, 'addbloodReq'])->name('website-bloodRequest');
Route::get("website/logout", [userController::class, 'logout'])->name("website-logout");
Route::get("/website/forget-password", [userController::class, 'forgotPassword'])->name("Forgotpassword");
Route::post("/website/forgotpassword", [userController::class, 'updateforgotPassword'])->name("webForgotpassword");
Route::get("/website/faq", [userController::class, 'Faq'])->name("website/faq");
// for AdminPanel Routes
Route::get('/admin/index', [adminController::class, 'index'])->name("adminIndex");
Route::get('/admin/c', [adminController::class, 'requestChart']);

Route::get('/admin/bloodGroup', [adminController::class, 'blood_addFrom'])->name('bloodAdded');
Route::post('/admin/bloodGroup', [adminController::class, 'addBloodGroup'])->name('AddGroup');
Route::get('/admin/show-blood-group', [adminController::class, 'bloodShow'])->name('showBloodGroup');
Route::get('/admin/blood-group/{id}', [adminController::class, 'deleteBloodGroup'])->name('deletedBloodGroup');
Route::get('/admin/bloodStatus/{id}', [adminController::class, 'blood_statusUpdate'])->name('statusBloodupdate');
Route::get('/admin/agents', [adminController::class, 'agentShow'])->name('agentdetails');
Route::get('/admin/add-agent', [adminController::class, 'agentForm'])->name('add-agent');
Route::get('/admin/userInfo', [adminController::class, 'user_info'])->name('user_info');
Route::post('/admin/crate', [adminController::class, 'agentcrate'])->name('addAgent');
Route::get('/admin/deleteAgent/{id}', [adminController::class, 'agentDel'])->name('deleteAgent');
Route::get('/admin/agent_statusUpdate/{id}', [adminController::class, 'agent_statusUpdate'])->name('statusAgent');
Route::get('/admin/Contact', [adminController::class, 'contactInfo'])->name('Contact-Info');
Route::get('/admin/delCont/{id}',[adminController::class, 'delCon'])->name('deleteCon');

Route::get('/admin/del-user/{id}',[adminController::class, 'deluser'])->name('deleteUser');
Route::get('/admin/user-status/{id}',[adminController::class, 'user_statusUpdate'])->name('statusUser');
Route::get('/admin/blood-Req',[adminController::class, 'blood_Req'])->name('blood_req');
Route::post('/admin/reqStatus/{id}',[adminController::class, 'ReqStatus'])->name('blood_Srtatus');
Route::get('/admin/deleteReq/{id}', [adminController::class, 'delReq'])->name('reqDonation');
Route::get('/admin-profile', [adminController::class, 'Adminprofile'])->name('admin-profile');
Route::post("/AdminprofileUpdate",[adminController::class, 'adminprofileUpdate'])->name('website-AdminprofileEdited');
Route::get("/admin/logout", [adminController::class, 'logout'])->name("Admin-logout");
Route::get("/admin/faq", [adminController::class, 'faqdataShow'])->name("Admin-faq");
Route::get("/admin/faqFrom", [adminController::class, 'faqFromShow'])->name("Admin-faq-create");
Route::post("/admin/faqCreate", [adminController::class, 'faqCreated'])->name("faq-create");
Route::get('/admin/deletefaq/{id}', [adminController::class, 'delFaq'])->name('delFaq');
Route::get('/admin/findfaq/{id}', [adminController::class, 'findFaq'])->name('FaqEdit');
Route::post("/admin/updateFaq/{id}",[adminController::class,'faqupdate'])->name("faq-update");

// agent Routes
Route::get("/agent/index", [agentController::class, 'index']);
Route::get("/agent/bloodReq", [agentController::class, 'bloodReq'])->name("agentBloodReq");
Route::post('/agent/reqStatus/{id}',[agentController::class, 'ReqStatus'])->name('agent-blood_Srtatus');
Route::get('/agent/profile',[agentController::class, 'agentprofile'])->name('agent-profile');
Route::post('/agent/updateprofile',[agentController::class, 'agentprofileUpdate'])->name('agent-Updateprofile');
Route::get("/agent/logout", [agentController::class, 'logout'])->name("Agent-logout");