<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use DB;
use App\Rules\MatchOldPassword; 
use App\Models\durablearticles;
use Carbon\Carbon;
use Session;
use Auth;
use Hash;

class DurablearticlesController extends Controller
{
    //view page all durablearticles
    public function alldurablearticles()
    {
        $showdate = DB::table('durablearticles')->get();   
        return view('formdurablearticles.alldurablearticles',compact('showdate'));
    }

    public function profile_durablearticles($id)
    {
        $showdate = DB::table('durablearticles')->where('id',$id)->first();   
        return view('formdurablearticles.viewdurablearticles',compact('showdate'));
    }

     public function viewmend_durablearticles($id)
    {
        $showdate = DB::table('durablearticles')->where('id',$id)->first();   
        return view('formdurablearticles.viewmenddurablearticles',compact('showdate'));
    }

    public function adddurablearticles()
    {
        // if (Auth::user()->role_name=='Admin')
        // {
            $categoryings_type              = DB::table('categoryings')->get();                 //หมวดหมู่ครุภัณฑ์
            $department_type                = DB::table('departments')->get();                  //หน่วยงานหลัก
            $departments_smalls_type        = DB::table('departments_smalls')->get();           //หน่วยงานย่อย
            $fiscalyears_type               = DB::table('fiscalyears')->get();                  //ปีงบประมาณ
            $howtogets_type                 = DB::table('howtogets')->get();                    //วิธีได้มา 
            $budgets_type                   = DB::table('budgets')->get();                      //ประเภทงบประมาณ
            $durablearticles_statuses_type  = DB::table('durablearticles_statuses')->get();     //สถานะ

         
            return view('formdurablearticles.adddurablearticles',compact('categoryings_type','departments_smalls_type','department_type','fiscalyears_type','howtogets_type','budgets_type','durablearticles_statuses_type'));
            
        // }  
        // else
        // {
            // return redirect()->route('home');
        // }
        // return view('formdurablearticles.adddurablearticles');
    }

    public function editdurablearticles($id)
    {
        $categoryings_type              = DB::table('categoryings')->get();                 //หมวดหมู่ครุภัณฑ์
        $department_type                = DB::table('departments')->get();                  //หน่วยงานหลัก
        $departments_smalls_type        = DB::table('departments_smalls')->get();           //หน่วยงานย่อย
        $fiscalyears_type               = DB::table('fiscalyears')->get();                  //ปีงบประมาณ
        $howtogets_type                 = DB::table('howtogets')->get();                    //วิธีได้มา 
        $budgets_type                   = DB::table('budgets')->get();                      //ประเภทงบประมาณ
        $durablearticles_statuses_type  = DB::table('durablearticles_statuses')->get();     //สถานะ

        $editdurablearticles = DB::table('durablearticles')->where('id',$id)->first();
        return view('formdurablearticles.editdurablearticles',compact('editdurablearticles','categoryings_type','departments_smalls_type','department_type','fiscalyears_type','howtogets_type','budgets_type','durablearticles_statuses_type'));
    }

     // save ครุภัณฑ์
    public function saveRecord(Request $request) 
    {
        $request->validate([
           'number_id'          => 'required|string|max:255|unique:durablearticles', 
           'category'           => 'required|string|max:255',
           'equipment'          => 'required|string|max:255',
           'counting_unit'      => 'required|string|max:255',
           'departments'        => 'required|string|max:255',
           'departments_small'  => 'required|string|max:255',
           'status'             => 'required|string|max:255',
           'fiscalyear'         => 'required|string|max:255',
           'howtoget'           => 'required|string|max:255',
           'budget_code'        => 'required|string|max:10',
           'project'            => 'required|string|max:255',
           'budget'             => 'required|string|max:255',
           'seller'             => 'required|string|max:255',
           'checkdata'          => 'required|string|max:255',
           'name'               => 'required|string|max:255',
           'price'              => 'required|string|max:255',
           'lifetime'           => 'required|string|max:255',  
        ]);

        DB::beginTransaction();
        try{
            $add_durablearticles = new durablearticles;
            $add_durablearticles -> number_id           = $request -> number_id;
            $add_durablearticles -> category            = $request -> category;
            $add_durablearticles -> equipment           = $request -> equipment;
            $add_durablearticles -> counting_unit       = $request -> counting_unit;
            $add_durablearticles -> departments         = $request -> departments;
            $add_durablearticles -> departments_small   = $request -> departments_small;
            $add_durablearticles -> building            = $request -> building;
            $add_durablearticles -> building_numder     = $request -> building_numder;
            $add_durablearticles -> building_floor      = $request -> building_floor ;
            $add_durablearticles -> room                = $request -> room ;
            $add_durablearticles -> status              = $request -> status ;
            $add_durablearticles -> fiscalyear          = $request -> fiscalyear ; 
            $add_durablearticles -> howtoget            = $request -> howtoget ;
            $add_durablearticles -> budget_code         = $request -> budget_code ;
            $add_durablearticles -> project             = $request -> project ;
            $add_durablearticles -> budget              = $request -> budget ;
            $add_durablearticles -> seller              = $request -> seller ;
            $add_durablearticles -> checkdata           = $request -> checkdata ;
            $add_durablearticles -> name                = $request -> name ;
            $add_durablearticles -> serial_number       = $request -> serial_number ;
            $add_durablearticles -> model_name          = $request -> model_name ;
            $add_durablearticles -> brand               = $request -> brand ;
            $add_durablearticles -> price               = $request -> price;
            $add_durablearticles -> vehicle_re          = $request -> vehicle_re ;
            $add_durablearticles -> description         = $request -> description ;
            $add_durablearticles -> lifetime            = $request -> lifetime ;
            $add_durablearticles->save();
            DB::commit();
            Alert::success('บันทึกข้อมูลครุภัณฑ์เรียบร้อย','Success');
            return redirect()->route('form/alldurablearticles');
        }catch(\Exception $e){
            DB::rollback();
            Alert::error('ไม่สามารถบันทึกข้อมูลได้','Error');
            return redirect()->back();
        }
        
    }

    // update ครุภัณฑ์
    public function updateRecord (Request $request)
    {
        DB::beginTransaction();
        try{
            $update = [
                 'id'                  => $request->id,
                 'number_id'           => $request->number_id,
                 'category'            => $request->category,
                 'equipment'           => $request->equipment,
                 'counting_unit'       => $request->counting_unit,
                 'departments'         => $request->departments,
                 'departments_small'   => $request->departments_small,
                 'building'            => $request->building,
                 'building_numder'     => $request->building_numder,
                 'building_floor'      => $request->building_floor ,
                 'room'                => $request->room ,
                 'status'              => $request->status ,
                 'fiscalyear'          => $request->fiscalyear , 
                 'howtoget'            => $request->howtoget ,
                 'budget_code'         => $request->budget_code ,
                 'project'             => $request->project ,
                 'budget'              => $request->budget ,
                 'seller'              => $request->seller ,
                 'checkdata'          => $request->checkdata ,
                 'name'                => $request->name ,
                 'serial_number'       => $request->serial_number ,
                 'model_name'          => $request->model_name ,
                 'brand'               => $request->brand ,
                 'price'               => $request->price,
                 'vehicle_re'          => $request->vehicle_re ,
                 'description'         => $request->description, 
                 'lifetime'            => $request->lifetime, 
            ];
            
            durablearticles::where('id',$request->id)->update($update);
           
            DB::commit();
            Alert::success('อับเดทข้อมูลครุภัณฑ์เรียบร้อย','Success');
            return redirect()->route('form/alldurablearticles');
        }catch(\Exception $e){
            DB::rollback();
            Alert::error('ไม่สามารถเพิ่มครุภัณฑ์ได้)','Error');
            return redirect()->back();
        }
    }

    // delete ครุภัณฑ์
    public function delete ($id)
    {   
        try {
            durablearticles::destroy($id);
            Alert::success('ลบข้อมูลเรียบร้อย','Success');
            return redirect()->back();
                
        } catch(\Exception $e) {
            DB::rollback();
            Alert::error('ไม่สามารถลบข้อมูลได้','Error');
            return redirect()->back();
        }
        
    }
}
