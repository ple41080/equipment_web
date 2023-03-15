<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class durablearticles extends Model
{
    use HasFactory;
    protected $fillable = [
        'number_id',             
        'category' ,          
        'equipment' ,             
        'counting_unit' ,         
        'departments' ,            
        'departments_small',
        'building',               
        'building_numder',        
        'building_floor',         
        'room',                 
        'status',                 
        'fiscalyear',             
        'howtoget',              
        'budget_code',            
        'project',                
        'budget',           
        'seller' ,                
        'checkdata' ,             
        'name' ,                  
        'serial_number' ,         
        'model_name',             
        'brand' ,                 
        'price' ,                 
        'vehicle_re' ,            
        'description' ,           
        'lifetime'              
    ];
}
