<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\departments_small;
use Session;
use Auth;


class Departments_smallController extends Controller
{
     //view page all departments_small
    public function alldepartments_small()
    {
        if (Auth::user()->role_name=='Admin')
        {
            $show = DB::table('departments_smalls')->get();
            return view('formalldepartments_small.alldepartments_small',compact('show'));
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
            'departments_smalls_type'        => 'required|string|max:255',
        ]);
        
        DB::beginTransaction();
        try {
            $departments_smalls_typee = new departments_small;
            $departments_smalls_typee ->departments_smalls_type  = $request->departments_smalls_type;
            $departments_smalls_typee ->save();
            DB::commit();
            Alert::success('เพิ่มหน่วยงานย่อยเรียบร้อย :)','Success');
            return redirect()->back();
        } catch(\Exception $e) {
            DB::rollback();
            Alert::error('ไม่สามารถเพิ่มข้อมูลได้ :)','Error');
            return redirect()->back();
        }
    }

     /** updateRecord */
    public function updateRecord(Request $request)
    { 
       DB::beginTransaction();
           try{
            
                $update = [
                    'id' =>$request->id,
                    'departments_smalls_type'  => $request->departments_smalls_type, 
                    'status'  => $request->status, 
                ];
                departments_small::where('id',$request->id)->update($update);
                DB::commit();
                Alert::success('อับเดทข้อมูลเรียบร้อย','Success');
                return redirect()->route('form/all/departments_small');
           }catch(\Exception $e){
               DB::rollback();
                Alert::error('ไม่สามารถอับเดทข้อมูลได้','Error') ;
               return redirect()->back();
           } 
    }
}  


