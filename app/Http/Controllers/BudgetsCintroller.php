<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert; 
use Illuminate\Http\Request;
use App\Models\budget;
use Carbon\Carbon;
use Session;
use Auth;
use Hash;
use DB;

class BudgetsCintroller extends Controller
{
    //view page all index
    public function index()
    {
        if (Auth::user()->role_name=='Admin')
        {
            $show = DB::table('budgets')->get();
            return view('formBudgets.allBudgets',compact('show'));
        }
        else
        {
            return redirect()->route('home');
        }
    }
      /** save record */
    public function saveRecord(Request $request)
    { 
        $request->validate([
            'budgets_type'        => 'required|string|max:255',
        ]);
        DB::beginTransaction();
        try {
            $add_budget = new budget;
            $add_budget->budgets_type       = $request->budgets_type;
            $add_budget->save();
            DB::commit();
            Alert::success('เพิ่มหมวดประเภทงบประมาณเรียบร้อย :)','Success');
            return redirect()->back();
        } catch(\Exception $e) {
            DB::rollback();
            Alert::error('ไม่สามารถเพิ่มประเภทงบประมาณได้ :)','Error');
            return redirect()->back();
        }
    }

    public function updateRecord(Request $request)
    { 
       DB::beginTransaction();
           try{
            
                $update = [
                    'id' =>$request->id,
                    'budgets_type'  => $request->budgets_type, 
                    'status'  => $request->status, 
                ];
                
                budget::where('id',$request->id)->update($update);
                DB::commit();
                Alert::success('อับเดทข้อมูลเรียบร้อย','Success');
                return redirect()->route('form/all/budgets');
           }catch(\Exception $e){
               DB::rollback();
                Alert::error('ไม่สามารถอับเดทข้อมูลได้','Error') ;
               return redirect()->back();
           } 
    }
}
