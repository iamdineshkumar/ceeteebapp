<?php

namespace App\Http\Controllers;
use App\Models\Masters\Ceetee_usercreation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class LoginController extends Controller
{

    public function login()
    {
        if (session()->missing('worker') )
        {
            return view('workers/login');

        }
        else
        {
            return redirect(url('attendance'));

        }
    }
    public function worker_login(Request $request){
        $request->validate([
            'type'=>'required',
            'login_name'=>'required',
            'password'=>'required'
        ]);
        if($request->type=='worker'){
            $existuser = Ceetee_usercreation::select('*')->where('login_name',$request->login_name)->first();
            if(!empty($existuser)){
                if($existuser->status!=3 && $existuser->action!=1){
                    return back()->withErrors("Worker Inactive , Contact admin!!!");
                }
                if($existuser->password==$request->password){
                    $request->session()->put('worker',['user_id' => $existuser->id,'worker_id' => $existuser->user_id,'username' => $existuser->username,'is_admin'=>false]);
                   
                   
                    return redirect(url('attendance'));
                    
                }
                else{
                    return back()->withErrors("Incorrect Password");
                }
            }
            else{
                return back()->withErrors("Worker Not Found");
            }
        }
        if($request->type=='admin'){
            $Query=User::where('User_Name',$request->login_name)
            ->where('Pwd',$request->password)
            ->get()->first();
            if(!empty($Query)){
                $request->session()->put('worker',['user_id'=>$Query->User_ID,'username'=>$Query->User_Name,'is_admin'=>true]);
                return redirect(url('attendance'));
            }
            else{
                return back()->withErrors("Invalid Username or Password!");
            }
        }

    }
    public function change_password(){
        return view('workers/change-password');
    }
    public function update_password(Request $request){
        $request->validate([
            'password'=>'required'
        ]);
        $user = Ceetee_usercreation::find(session('worker')['user_id']);
        if($user){
            $user->password=$request->password;
            $user->save();
            return view('workers/dashboard')->with('message', 'Password Updated Successfully');
        }
        else{
            return back()->withErrors("Invalid Request");
        }
    }
    public function logout()
    {
        Session::flush();
        return redirect(url('worker-login'));
    }
}
