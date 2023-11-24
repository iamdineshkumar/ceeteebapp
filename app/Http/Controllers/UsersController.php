<?php

namespace App\Http\Controllers;

use App\Models\Booking_Details;
use App\Models\Privilege;
use App\Models\Template;
use App\Models\Template_Privileges;
use App\Models\User_Template_Privileges;
use App\Models\User;
use App\Models\User_Role;
use App\Models\User_Department;
use App\Models\Branch;
use App\Models\Company;
use App\Models\Customer_Lead_Creation;
use App\Models\System_Modules;
use App\Models\System_Sub_Modules;
use App\Models\OwnershipChange;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rules\Exists;

class UsersController extends Controller
{
    /* USER LOGIN */
    public function login()
    {


        if (session()->missing('company') )
        {
            if (session()->missing('user'))
            {
                return view('login');
            }
            else
            {
                $company = Company::all();
                // print_r($company);exit;
                return view('login',['company'=>$company]);
            }
        }
        else
        {
            return redirect(url('Dashboard'));
        }
    }
      public function userLogin(Request $request)
    {
        $request->validate([
            'uname'=>'required',
            'pword'=>'required'
        ]);

        $uname = $request->input('uname');
        $pword = $request->input('pword');
        $Query=User::where('User_Name',$uname)
        ->where('Pwd',$pword)
        ->get()->first();

        if( $Query && $Query->count()>0){
            //Session For User Detail
            $request->session()->put('user',['UserId'=>$Query->User_ID,'UserName'=>$Query->User_Name, 'UserRole'=>$Query->User_Role, 'UserDepartment'=>$Query->User_Department]);
            //return redirect('Dashboard');

            // Session for Module
            //$Mod = User_Template_Privileges::where('user_id',$Query->User_ID)
            // ->select('system_module_name')
            // ->distinct()
            // ->get();

            // foreach($Mod as $m)
            // {
            //     //array_push($modules,$m->system_module_name);
            //     $request->session()->put($m->system_module_name,$m->system_module_name);
            //     // Session for Sub Module
            //     $SubMod = User_Template_Privileges::where('user_id',$Query->User_ID)
            //     ->where('system_module_name',$m->system_module_name)
            //     ->get();
            //     $privileges = array();
            //     foreach($SubMod as $s)
            //     {
            //         $privileges = explode (", ", $s->privileges);
            //          //array_push($privileges,$s->privileges);
            //         $request->session()->put($s->system_sub_module_name,$privileges);
            //     }

            // }
           // $request->session()->put('modules',$modules);
        //    if(session()->has('Template'))
        //    {
        //     dd(session('Template'));
        //    }
        //    else
        //    {
        //     dd('session does not contains');
        //    }




            return redirect(url('/'));
        }
        else{
           // return redirect('/dashboard');
           return back()->withErrors(['Invalid Username or Password!']);
        }
       $request->session()->put('user',$uname);
  /*     if(session()->has('user'))
    {
        return view('Dashboard/dashboard');
    }
    else
    {
        return view('login');
    } */
    }
    public function userLogout()
    {
        Session::flush();
        return redirect(url('/'));
    }
    public function cbLogin(Request $request)
    {
        $request->validate([
            'slct_company'=>'required',
            'slct_branch'=>'required'
        ]);

        $company = $request->input('slct_company');
        $branch = $request->input('slct_branch');
      /*  $Query=User::where('User_Name',$uname)
        ->where('Pwd',$pword)
        ->get()->first();
*/
    /*    if( $Query && $Query->count()>0){
            $request->session()->put('user',['UserName'=>$Query->User_Name, 'UserRole'=>$Query->User_Role]);
            //return redirect('Dashboard');
            return back();
        }
        else{
           // return redirect('/dashboard');
           return back()->withErrors(['Invalid Username or Password!']);
        } */
       $request->session()->put('company',$company);
       $request->session()->put('branch',$branch);
       $cname=Company::where('Company_ID',$company)->select('Company_Name')->get();
       if($cname)
       {
        $request->session()->put('company_name',$cname->pluck('Company_Name')->first());
       }
       $bname=Branch::where('Branch_ID',$branch)->select('BranchName')->get();
       if($bname)
       {
        $request->session()->put('branch_name',$bname->pluck('BranchName')->first());
       }
       return redirect(url('Dashboard'));

    }

    public function userBranch(Request $request)
    {
        $branch = Branch::select('Branch_ID','BranchName')
        ->where('Company_ID',$request->id)
        ->get();
        return response()->json($branch);
        }

    /* Privilege Creation */
    public function privilege_creation()
    {
        $privilege = Privilege::all();

        return view('users/privilege_creation',['privilege'=>$privilege]);
    }

    public function privilege_add(Request $request)
    {
        $privilege = new Privilege;
        $privilege_name = $request->txt_name;
        $privilege_status = $request->slct_status;
        $privilege_remarks = $request->txta_description;
        $query1 = Privilege::where('privilege', $privilege_name)
        ->get();
        $count=$query1->count();
        $data=0;
        if($count==0)
        {
            if($privilege_status=="Privilege")
            {
                $privilege->privilege = $privilege_name;
                $privilege->status = "1";
                $privilege->remarks = $privilege_remarks;
                $query = $privilege->save();
                if($query)
                {
                    return back()->with('message', 'Privilege Created Successfully');
                }
                else
                {
                    return back()->withErrors("Something went wrong while creating Privilege");
                }
            }
            else
            {
                $privilege->privilege = $privilege_name;
                $privilege->status = "2";
                $privilege->remarks = $privilege_remarks;
                $query = $privilege->save();
                if($query)
                {
                    return back()->with('message', 'Privilege Created Successfully');
                }
                else
                {
                    return back()->withErrors("Something went wrong while creating Privilege");
                }
            }
        }
        else
        {
            return back()->withErrors("This Privilege name is Already Exists");
        }
        return response()->json($data);
     }
     public function privilege_view(Request $request)
    {
        $vprivilege = Privilege::where('id',$request->id)->get();
        return response()->json($vprivilege);
    }
    public function privilege_edit(Request $request)
    {
        $privilege_name = $request->txt_ename;
        $privilege_status = $request->slct_estatus;
        $privilege_remarks = $request->txta_edescription;

        if($privilege_status=="Privilege")
        {
            $eprivilege = Privilege::where('id',$request->txt_eid)
            ->update(['privilege'=> $privilege_name, 'status'=> "1", 'remarks'=> $privilege_remarks]);
            if($eprivilege)
            {
                return back()->with('message', 'Privilege Updated Successfully');
            }
            else
            {
                return back()->withErrors("Something went wrong while Updating Privilege");
            }
        }
        else
        {
            $eprivilege = Privilege::where('id',$request->txt_eid)
        ->update(['privilege'=> $privilege_name, 'status'=> "2", 'remarks'=> $privilege_remarks]);
        if($eprivilege)
        {
            return back()->with('message', 'Privilege Updated Successfully');
        }
        else
        {
            return back()->withErrors("Something went wrong while Updating Privilege");
        }
        }
    }
    public function privilege_delete(Request $request)
    {
        $privilege = Privilege::where('id',$request->txt_did)
        ->delete();
        if($privilege)
        {
            return back()->with('message', 'Privilege Deleted Successfully');
        }
        else
        {
            return back()->withErrors("Something went wrong while Deleting Privilege");
        }

    }

    /* End Privilege Creation */

/* Template Creation */
    public function template_creation()
    {
        $template = Template::all();
        $user_role = User_Role::all();
        $user_roles = User_Role::all();
        return view('users/template_creation',['template'=>$template,'user_role'=>$user_role,'user_roles'=>$user_roles]);
    }
    public function template_add(Request $request)
    {
        $template = new Template;
        $template->template_name=$request->txt_tname;
        $template->user_role=$request->slct_role;
        $template->view_option=$request->slct_viewop;
        $template->remarks=$request->txta_remarks;
        $query=$template->save();
        if($query)
        {
            return back()->with('message', 'Template Created Successfully');
        }
        else
        {
            return back()->withErrors("Something went wrong while creating Template");
        }

    }

    public function getTemplate(Request $request)
    {
        $template =Template::where('id',$request->id)->get();
         return response()->json($template);

    }

    public function template_edit(Request $request)
    {
        $template = Template::where('id',$request->txt_eid)
        ->update(['template_name'=> $request->txt_etname, 'user_role'=> $request->slct_erole, 'view_option'=> $request->slct_eviewop, 'remarks'=> $request->txta_eremarks]);
        if($template)
        {
            return back()->with('message', 'Template Updated Successfully');
        }
        else
        {
            return back()->withErrors("Something went wrong while Updating Template");
        }

    }
    public function template_delete(Request $request)
    {
        $template = Template::where('id',$request->txt_did)
        ->delete();
        if($template)
        {
            return back()->with('message', 'Template Deleted Successfully');
        }
        else
        {
            return back()->withErrors("Something went wrong while Deleting Template");
        }

    }
    public function assign_privilege(Request $request)
    {
        $template_privileges = Template_Privileges::where('template_id',$request->id)->get();
        $template = Template::where('id',$request->id)
        ->leftJoin('user_role', 'user_role.Role_Id', '=', 'template.user_role')
        ->select('template.*','user_role.Role_Name')
        ->get();
        $emptyprivilege=Privilege::where('status',"1")->get();
        $emptyapproval=Privilege::where('status',"2")->get();
        $system_modules=System_Modules::all();
        $privileges=Privilege::where("status","1")->get();
        $approvals=Privilege::where("status","2")->get();

        return view('users/assign_privilege', ['template_privileges'=>$template_privileges,'template'=>$template,'emptyprivilege'=>$emptyprivilege,'emptyapproval'=>$emptyapproval,'system_modules'=>$system_modules, 'privileges'=>$privileges, 'approvals'=>$approvals]);
    }

    public static function checkSystemModules($tempid,$id)
    {
        $system_modules=Template_Privileges::where('template_id',$tempid)
        ->where('system_module_id',$id)
        ->get();
         return $system_modules->count();

    }
    public static function checkSystemPrivilege($tempid,$sys_id,$sub_sys_id)
    {
        $system_modules=Template_Privileges::where('template_id',$tempid)
        ->where('system_module_id',$sys_id)
        ->where('system_sub_module_id',$sub_sys_id)
        ->get();
         return $system_modules;

    }
    public static function checkUserSystemPrivilege($userid, $tempid,$sys_id,$sub_sys_id)
    {
        $system_modules=User_Template_Privileges::where('user_id',$userid)
        ->where('template_id',$tempid)
        ->where('system_module_id',$sys_id)
        ->where('system_sub_module_id',$sub_sys_id)
        ->get();
         return $system_modules;

    }


    public static function system_sub_modules($id)
    {
        $system_sub_modules=System_Sub_Modules::where('system_module_id',$id)->get();
         return $system_sub_modules;

    }

    // public function updatetemplateprivilege(Request $request)
    // {
    //     $tempexists=Template_Privileges::where('template_id',$request->templateid)
    //     ->where('system_module_id', $request->moduleid)
    //     ->where('system_sub_module_id', $request->submoduleid)
    //     ->get();
    //     // To hold database value
    //     $temp_values=[];
    //     foreach($tempexists as $temp)
    //     {
    //         $temp_values[]=$temp['privilege_id'];
    //     }

    //     // Insert Newly Added data
    //     $privilegval=$request->privilegeval;
    //     if(!empty($privilegval))
    //     {
    //     foreach($privilegval as $prival)
    //     {
    //         if(!in_array($prival,$temp_values))
    //         {
    //             //echo $prival." Insert Here";
    //             $template = new Template_Privileges;
    //             $template->template_id=$request->templateid;
    //             $template->template_name=$request->templatename;
    //             $template->system_module_id=$request->moduleid;
    //             $template->system_module_name=$request->modulename;
    //             $template->system_sub_module_id=$request->submoduleid;
    //             $template->system_sub_module_name=$request->submodulename;
    //             $template->privilege_id=$prival;
    //             $query=$template->save();
    //         }
    //     }

    //     // Delete existing data

    //     foreach($temp_values as $tempval)
    //     {
    //         if(!in_array($tempval,$privilegval))
    //         {
    //            // echo $tempval." Delete";
    //            $deltemplate = Template_Privileges::where('template_id',$request->templateid)
    //            ->where('system_module_id', $request->moduleid)
    //            ->where('system_sub_module_id', $request->submoduleid)
    //            ->where('privilege_id',$tempval)
    //            ->delete();
    //         }
    //     }
    // }
    // else
    // {
    //     foreach($request->emptydelete as $empty)
    //     {
    //         $deltemplate = Template_Privileges::where('template_id',$request->templateid)
    //          ->where('system_module_id', $request->moduleid)
    //          ->where('system_sub_module_id', $request->submoduleid)
    //          ->where('privilege_id',$empty)
    //          ->delete();
    //     }
    // }

    //     return "success";

    // }


    public function updatetemplateprivilege(Request $request)
    {
        $tempexists=Template_Privileges::where('template_id',$request->templateid)
        ->where('system_module_id', $request->moduleid)
        ->where('system_sub_module_id', $request->submoduleid)
        ->count();


        $privilege='';
        // dd(sizeof($request->privilegeval));
       if(!empty($request->privilegeval))
       {
        $privilege=implode(', ', $request->privilegeval);
        }
   if($privilege=='')
    {

        $query = Template_Privileges::where(['template_id'=>$request->templateid,'system_module_id'=>$request->moduleid,'system_sub_module_id'=> $request->submoduleid])
        ->delete();

    }
    elseif($tempexists>0)
        {
            $query = Template_Privileges::where(['template_id'=>$request->templateid,'system_module_id'=>$request->moduleid,'system_sub_module_id'=> $request->submoduleid])
            ->update([
                'privileges'=>$privilege,
            ]);
        }
        else
        {
            $template = new Template_Privileges;
            $template->template_id=$request->templateid;
            $template->template_name=$request->templatename;
            $template->system_module_id=$request->moduleid;
            $template->system_module_name=$request->modulename;
            $template->system_sub_module_id=$request->submoduleid;
            $template->system_sub_module_name=$request->submodulename;
            $template->privileges=$privilege;
            $query=$template->save();
        }

        return "success";

    }

    /* End Template Creation */

    /* User Management */
    public function user_management()
    {
        $users = User::all();
        $user_ids = User::latest()->take(1)->get();
        $user_role = User_Role::all();

        $user_department = User_Department::all();
        $user_departments = User_Department::all();
        $templates=Template::all();
        return view('users/user_management', ['users'=>$users,'user_roles'=>$user_role,'user_role'=>$user_role,'user_department'=>$user_department,'user_departments'=>$user_departments,'user_ids'=>$user_ids,'templates'=>$templates]);
    }

    public function user_add(Request $request)
    {
        $user = new user;
        $user->User_ID=$request->txt_id;
        $user->User_Name=$request->txt_uname;
        $user->LogIn_Name=$request->txt_lname;
        $user->Pwd=$request->txt_pword;
        $user->User_Role=$request->slct_urole;
        $user->Template_Id=$request->slct_template;
        $user->Template_Name=$request->txt_templatename;
        $user->User_Department=$request->slct_udept;

        $query=$user->save();
        if($query)
        {
            $template=Template_Privileges::where('template_id',$request->slct_template)
            ->leftJoin('template', 'template.id', '=', 'template_privileges.template_id')
            ->select('template_privileges.*','template.view_option')
            ->get();
            foreach($template as $temp)
            {
                $user_temp= new User_Template_Privileges;
                $user_temp->user_id=$request->txt_id;
                $user_temp->user_name=$request->txt_lname;
                $user_temp->view_option=$temp->view_option;
                $user_temp->template_id=$temp->template_id;
                $user_temp->template_name=$temp->template_name;
                $user_temp->system_module_id=$temp->system_module_id;
                $user_temp->system_module_name=$temp->system_module_name;
                $user_temp->system_sub_module_id=$temp->system_sub_module_id;
                $user_temp->system_sub_module_name=$temp->system_sub_module_name;
                $user_temp->privileges=$temp->privileges;
                $user_temp->save();
            }

            return back()->with('message', 'User Created Successfully');
        }
        else
        {
            return back()->withErrors("Something went wrong while creating User");
        }

    }

    public function user_view(Request $request)
    {
        $vuser = User::where('User_ID',$request->id)->get();
        return response()->json($vuser);
    }

    public function user_edit(Request $request)
    {
        $userid = $request->txt_eid;
        $lname = $request->txt_elname;
        $uname = $request->txt_euname;
        $udept=$request->slct_eudept;
        $urole=$request->slct_eurole;
        $template=$request->slct_etemplate;
        $templatename=$request->txt_etemplatename;

        $euser = User::where('User_ID',$userid)
            ->update(['User_Name'=> $uname, 'LogIn_Name'=> $lname, 'User_Department'=> $udept, 'User_Role'=>$urole, 'Template_Id'=>$template,'Template_Name'=>$templatename]);


        $temp_exists=User_Template_Privileges::where('user_id',$userid)->get();


        if($temp_exists->count()>0)
        {


                User_Template_Privileges::where('user_id',$userid)->delete();
                $templates=Template_Privileges::where('template_id',$template)
                ->leftJoin('template', 'template.id', '=', 'template_privileges.template_id')
                ->select('template_privileges.*','template.view_option')
                ->get();
                foreach($templates as $temp)
                {
                    $user_temp= new User_Template_Privileges;
                    $user_temp->user_id=$request->txt_eid;
                    $user_temp->user_name=$request->txt_elname;
                    $user_temp->view_option=$temp->view_option;
                    $user_temp->template_id=$temp->template_id;
                    $user_temp->template_name=$temp->template_name;
                    $user_temp->system_module_id=$temp->system_module_id;
                    $user_temp->system_module_name=$temp->system_module_name;
                    $user_temp->system_sub_module_id=$temp->system_sub_module_id;
                    $user_temp->system_sub_module_name=$temp->system_sub_module_name;
                    $user_temp->privileges=$temp->privileges;
                    $user_temp->save();
                }

                return back()->with('message', 'User Updated Successfully');


        }
        else
        {
            $templates=Template_Privileges::where('template_id',$template)
            ->leftJoin('template', 'template.id', '=', 'template_privileges.template_id')
            ->select('template_privileges.*','template.view_option')
            ->get();
            foreach($templates as $temp)
            {
                $user_temp= new User_Template_Privileges;
                $user_temp->user_id=$request->txt_eid;
                $user_temp->user_name=$request->txt_elname;
                $user_temp->view_option=$temp->view_option;
                $user_temp->template_id=$temp->template_id;
                $user_temp->template_name=$temp->template_name;
                $user_temp->system_module_id=$temp->system_module_id;
                $user_temp->system_module_name=$temp->system_module_name;
                $user_temp->system_sub_module_id=$temp->system_sub_module_id;
                $user_temp->system_sub_module_name=$temp->system_sub_module_name;
                $user_temp->privileges=$temp->privileges;
                $user_temp->save();
                return back()->with('message', 'User Updated Successfully');
            }

            return back()->with('message', 'error');
        }

    }

    public function user_delete(Request $request)
    {
        $user = User::where('User_ID',$request->txt_did)
        ->delete();
        if($user)
        {
            $user_temp = User_Template_Privileges::where('user_id',$request->txt_did)
            ->delete();
            return back()->with('message', 'User Deleted Successfully');
        }
        else
        {
            return back()->withErrors("Something went wrong while Deleting User");
        }

    }

    public function assign_user_privilege(Request $request)
    {
        $template_privileges = User_Template_Privileges::where('user_id',$request->id)->get();

        $template = User::where('User_ID',$request->id)
        ->leftJoin('user_role', 'user_role.Role_Id', '=', 'user_creation.user_role')
        ->leftJoin('template', 'template.id', '=', 'user_creation.Template_Id')
        ->select('user_creation.*','user_role.Role_Name','template.view_option')
        ->get();
        $emptyprivilege=Privilege::where('status',"1")->get();
        $emptyapproval=Privilege::where('status',"2")->get();
        $system_modules=System_Modules::all();
        $privileges=Privilege::where("status","1")->get();
        $approvals=Privilege::where("status","2")->get();
        $user_departments = User_Department::all();
        $temps=Template::all();
        $user_role = User_Role::all();
        return view('users/assign_user_privilege', ['template_privileges'=>$template_privileges,'template'=>$template,'emptyprivilege'=>$emptyprivilege,'emptyapproval'=>$emptyapproval,'system_modules'=>$system_modules, 'privileges'=>$privileges, 'approvals'=>$approvals, 'user_departments'=>$user_departments, 'templates'=>$temps, 'user_roles'=>$user_role]);
    }

    public static function checkUserSystemModules($userid,$id)
    {
        $system_modules=User_Template_Privileges::where('user_id',$userid)
        ->where('system_module_id',$id)
        ->get();
         return $system_modules->count();

    }

    public function updateusertemplateprivilege(Request $request)
    {
        $tempexists=User_Template_Privileges::where('user_id',$request->userid)
        ->where('template_id', $request->templateid)
        ->where('system_module_id', $request->moduleid)
        ->where('system_sub_module_id', $request->submoduleid)
        ->count();

        $privilege='';
        // dd(sizeof($request->privilegeval));
       if(!empty($request->privilegeval))
       {
        $privilege=implode(', ', $request->privilegeval);
        }
   if($privilege=='')
   {

       $query = User_Template_Privileges::where(['user_id'=>$request->userid,'template_id'=>$request->templateid,'system_module_id'=>$request->moduleid,'system_sub_module_id'=> $request->submoduleid])
       ->delete();

   }
   elseif($tempexists>0)
       {
           $query = User_Template_Privileges::where(['user_id'=>$request->userid,'template_id'=>$request->templateid,'system_module_id'=>$request->moduleid,'system_sub_module_id'=> $request->submoduleid])
           ->update([
               'privileges'=>$privilege,
           ]);
       }
       else
       {
           $template = new User_Template_Privileges;
           $template->user_id=$request->userid;
           $template->user_name=$request->username;
           $template->view_option=$request->viewoption;
           $template->template_id=$request->templateid;
           $template->template_name=$request->templatename;
           $template->system_module_id=$request->moduleid;
           $template->system_module_name=$request->modulename;
           $template->system_sub_module_id=$request->submoduleid;
           $template->system_sub_module_name=$request->submodulename;
           $template->privileges=$privilege;
           $query=$template->save();
       }

    //     // To hold database value
    //     $temp_values=[];
    //     foreach($tempexists as $temp)
    //     {
    //         $temp_values[]=$temp['privilege_id'];
    //     }

    //     // Insert Newly Added data
    //     $privilegval=$request->privilegeval;
    //     if(!empty($privilegval))
    //     {
    //     foreach($privilegval as $prival)
    //     {
    //         if(!in_array($prival,$temp_values))
    //         {
    //             //echo $prival." Insert Here";
    //             $template = new Template_Privileges;
    //             $template->user_id=$request->userid;
    //             $template->user_name=$request->username;
    //             $template->view_option=$request->viewoption;
    //             $template->template_id=$request->templateid;
    //             $template->template_name=$request->templatename;
    //             $template->system_module_id=$request->moduleid;
    //             $template->system_module_name=$request->modulename;
    //             $template->system_sub_module_id=$request->submoduleid;
    //             $template->system_sub_module_name=$request->submodulename;
    //             $template->privilege_id=$prival;
    //             $query=$template->save();
    //         }
    //     }

    //     // Delete existing data

    //     foreach($temp_values as $tempval)
    //     {
    //         if(!in_array($tempval,$privilegval))
    //         {
    //            // echo $tempval." Delete";
    //            $deltemplate = User_Template_Privileges::where('user_id',$request->userid)
    //            ->where('template_id', $request->templateid)
    //            ->where('system_module_id', $request->moduleid)
    //            ->where('system_sub_module_id', $request->submoduleid)
    //            ->where('privilege_id',$tempval)
    //            ->delete();
    //         }
    //     }
    // }
    // else
    // {
    //     foreach($request->emptydelete as $empty)
    //     {
    //         $deltemplate = User_Template_Privileges::where('user_id',$request->userid)
    //         ->where('template_id', $request->templateid)
    //          ->where('system_module_id', $request->moduleid)
    //          ->where('system_sub_module_id', $request->submoduleid)
    //          ->where('privilege_id',$empty)
    //          ->delete();
    //     }
    // }

        return "success";

    }
    /* End User Management */


     /* Start Change Transaction Ownership */

     public function change_transaction_ownership()
     {
         $givers =  User :: all();
         $receivers =  User :: where('status','1')
         ->get();
         return view('users/change_transaction_ownership',['givers'=>$givers,'receivers'=>$receivers]);
     }

     public function change_ownership(Request $request)
    {
        $fromdate = date("Y-m-d", strtotime($request->input('dt_startdate')));
        $todate = date("Y-m-d", strtotime($request->input('dt_enddate')));
        $status = "";
        if($request->input('slct_status')!="")
        {
            $status = implode(',', $request->input('slct_status'));
        }

        $change = new OwnershipChange();
        $change->giver = $request->input('slct_giver');
        $change->receiver = $request->input('slct_receiver');
        $change->From_Date = $fromdate;
        $change->To_Date = $todate;
        $change->status_list = $status;
        $change->created_by = session('user')['UserId'];
        $query = $change->save();
        if($query)
        {

            if($request->input('dt_startdate')!="")
            {
                if($request->input('slct_status')!="")
                {
                    //check name,date and status
                    // Customer Lead Creation Promoter Table
                    Customer_Lead_Creation::where('Promoter_ID', $request->input('slct_giver'))
                    ->whereBetween('Date', [$fromdate, $todate])
                    ->whereIn('Leadnature',$request->input('slct_status'))
                    ->update([
                        'Promoter_ID' => $request->input('slct_receiver')
                    ]);
                    // Customer Lead Creation Sales Promoter
                    Customer_Lead_Creation::where('Salespromoter', $request->input('slct_giver'))
                    ->whereBetween('Date', [$fromdate, $todate])
                    ->whereIn('Leadnature',$request->input('slct_status'))
                    ->update([
                        'Promoter_ID' => $request->input('slct_receiver')
                    ]);
                     // Booking FollowupOwner
                     Booking_Details::where('FollowupOwner', $request->input('slct_giver'))
                     ->whereBetween('Booking_Date', [$fromdate, $todate])
                     ->whereIn('Booking_Status',$request->input('slct_status'))
                     ->update([
                         'FollowupOwner' => $request->input('slct_receiver')
                     ]);
                }
                else
                {
                    //check name and date
                     // Customer Lead Creation Promoter Table
                     Customer_Lead_Creation::where('Promoter_ID', $request->input('slct_giver'))
                     ->whereBetween('Date', [$fromdate, $todate])
                     ->update([
                         'Promoter_ID' => $request->input('slct_receiver')
                     ]);
                     // Customer Lead Creation Sales Promoter
                     Customer_Lead_Creation::where('Salespromoter', $request->input('slct_giver'))
                     ->whereBetween('Date', [$fromdate, $todate])
                     ->update([
                         'Promoter_ID' => $request->input('slct_receiver')
                     ]);
                      // Booking FollowupOwner
                      Booking_Details::where('FollowupOwner', $request->input('slct_giver'))
                      ->whereBetween('Booking_Date', [$fromdate, $todate])
                      ->update([
                          'FollowupOwner' => $request->input('slct_receiver')
                      ]);
                }
            }
            elseif($request->input('slct_status')!="")
            {
                // check name and status
                 // Customer Lead Creation Promoter Table
                 Customer_Lead_Creation::where('Promoter_ID', $request->input('slct_giver'))
                 ->whereIn('Leadnature',$request->input('slct_status'))
                 ->update([
                     'Promoter_ID' => $request->input('slct_receiver')
                 ]);
                 // Customer Lead Creation Sales Promoter
                 Customer_Lead_Creation::where('Salespromoter', $request->input('slct_giver'))
                 ->whereIn('Leadnature',$request->input('slct_status'))
                 ->update([
                     'Promoter_ID' => $request->input('slct_receiver')
                 ]);
                  // Booking FollowupOwner
                  Booking_Details::where('FollowupOwner', $request->input('slct_giver'))
                  ->whereIn('Booking_Status',$request->input('slct_status'))
                  ->update([
                      'FollowupOwner' => $request->input('slct_receiver')
                  ]);
            }
            else
            {
                //check name only
                 // Customer Lead Creation Promoter Table
                 Customer_Lead_Creation::where('Promoter_ID', $request->input('slct_giver'))
                 ->update([
                     'Promoter_ID' => $request->input('slct_receiver')
                 ]);
                 // Customer Lead Creation Sales Promoter
                 Customer_Lead_Creation::where('Salespromoter', $request->input('slct_giver'))
                 ->update([
                     'Promoter_ID' => $request->input('slct_receiver')
                 ]);
                  // Booking FollowupOwner
                  Booking_Details::where('FollowupOwner', $request->input('slct_giver'))
                  ->update([
                      'FollowupOwner' => $request->input('slct_receiver')
                  ]);
            }

            return back()->with('message', 'Ownership Changed Successfully');
        }
        else
        {
            return back()->withErrors("Something went wrong while Changing Ownership");
        }

    }

      /* End Change Transaction Ownership  */
}
