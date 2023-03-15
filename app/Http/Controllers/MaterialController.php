<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use DB;
use Session;
use Auth;

class MaterialController extends Controller
{
    
    //view page all 
    public function allMaterial() 
    {    
        return view('formMaterial.AllMaterial');          
    }
       //view page 
    public function CreateMaterial() 
    {    
        return view('formMaterial.create_material');    
    }
}
