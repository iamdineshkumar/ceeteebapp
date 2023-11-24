<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Accounts\PaymentOrder;
use App\Models\Accounts\GWOInvoice;
use App\Models\PurchaseMas;
use App\Models\ContractorinvoiceMas;

class DashboardController extends Controller
{
    //
    
    public function index()
    {
      // dd(session()->all());
     
        if(session('user')['UserDepartment']=='Accounts Department' || session('user')['UserDepartment']=='Administrating Department'  || session('user')['UserRole']=='Admin')
      {
       
        $payment_orders = PaymentOrder::where('status1','Open')
        ->where('branch_id', session('branch'))
        ->orderBy('date','desc')
        ->get();
        $srvs = PurchaseMas::where('purchase_mas.status','Open')
        ->where('Branch_ID', session('branch'))
        ->leftJoin('user_creation as sp', 'purchase_mas.created_by', '=', 'sp.User_ID')
        ->select('purchase_mas.*','sp.LogIn_Name as CreatedBy')
        ->orderBy('Date','desc')
        ->get();
        $labour_invoices = ContractorinvoiceMas::where('contractor_invoice_mas.status','Open')
        ->where('Branch_ID', session('branch'))
        ->leftJoin('user_creation as sp', 'contractor_invoice_mas.created_by', '=', 'sp.User_ID')
        ->select('contractor_invoice_mas.*','sp.LogIn_Name as CreatedBy')
        ->orderBy('Date','desc')
        ->get();
        $gwos = GWOInvoice::where('acc_gwo_invoice1.status','Open')
        ->where('Branch_ID', session('branch'))
        ->leftJoin('user_creation as sp', 'acc_gwo_invoice1.created_by', '=', 'sp.User_ID')
        ->select('acc_gwo_invoice1.*','sp.LogIn_Name as CreatedBy')
        ->orderBy('date','desc')
        ->get();
        return view('Dashboard/accounts_dashboard',['payment_orders'=>$payment_orders,'srvs'=>$srvs, 'labour_invoices'=>$labour_invoices,'gwos'=>$gwos]);
      }
      else
      { 
        return view('Dashboard/dashboard');
        
      }
    }
}
