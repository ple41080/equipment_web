<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use RealRashid\SweetAlert\Facades\Alert; 
// use Brian2694\Toastr\Facades\Toastr;
use App\Models\department;
use DB;
use Carbon\Carbon;
use Session;
use Auth;
use Hash;


class Main_agencyController extends Controller
{

    //view page all durablearticles
    public function allmain_agency()
    {
        if (Auth::user()->role_name=='Admin')
        {
            $show = DB::table('departments')->get();
            return view('formmain_agency.allmain_agency',compact('show'));
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
            'department_type'        => 'required|string|max:255',
        ]);
        DB::beginTransaction();
        try {
            $add_department_type = new department;
            $add_department_type->department_type        = $request->department_type;
            $add_department_type->save();

            DB::commit();
            Alert::success('เพิ่มหน่วยงานหลักเรียบร้อย :)','Success');
            return redirect()->back();
        } catch(\Exception $e) {
            DB::rollback();
            Alert::error('Add Training Type fail :)','Error');
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
                    'department_type'  => $request->department_type, 
                    'status'  => $request->status, 
                ];
                department::where('id',$request->id)->update($update);
                DB::commit();
                Alert::success('อับเดทข้อมูลเรียบร้อย','Success');
                return redirect()->route('form/all/main_agency');
           }catch(\Exception $e){
               DB::rollback();
                Alert::error('ไม่สามารถอับเดทข้อมูลได้','Error') ;
               return redirect()->back();
           } 
    }







}
