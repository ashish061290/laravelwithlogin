<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $guard ='admin';
    protected $guarded = ['id'];
    protected $table = 'aa_company_master';
    public function state(){

    }
    public function city(){

    }
    public function country(){
        
    }
}
