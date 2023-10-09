<?php
namespace App\Http\Controllers\Admin\company;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index(){
           return view('admin.company.companycreate');
    }
    public function CompanyCreate(Request $request){
           dd($request);
    }
}
