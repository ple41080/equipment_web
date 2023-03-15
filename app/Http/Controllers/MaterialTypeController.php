<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert; 
use App\Models\MaterialType;
use DB;
use Session;
use Auth;
use Hash;

class MaterialTypeController extends Controller
{
    //view page all durablearticles
    public function allmaterialtype()
    {    
        $show = DB::table('material_types')->get();  
        return view('formmaterialtype.allmaterialtype',compact('show'));          
    }

    public function saveRecord(Request $request)
    { 
        $request->validate([
            'material_name'        => 'required|string|max:255',
        ]);
        DB::beginTransaction();
        try {
            $Add_Maintain = new MaterialType;
            $Add_Maintain->material_name       = $request->material_name;
            $Add_Maintain->save();
            DB::commit();
            Alert::success('เพิ่มประเภทวัสดุเรียบร้อย :)','Success');
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
                    'material_name'  => $request->material_name, 
                    'material_status'  => $request->material_status, 
                ];
                MaterialType::where('id',$request->id)->update($update);
                DB::commit();
                Alert::success('อับเดทข้อมูลเรียบร้อย','Success');
                return redirect()->route('form/all/materialtype');
           }catch(\Exception $e){
               DB::rollback();
                Alert::error('ไม่สามารถอับเดทข้อมูลได้','Error') ;
               return redirect()->back();
           } 
    }
}
