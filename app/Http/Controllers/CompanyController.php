<?php

namespace App\Http\Controllers;

use App\company;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;


class CompanyController extends Controller
{
    //Data Read From Database
    public function getAllCompany(){
        $company=company::latest()->paginate(5);
        return view('frontend.crud.index',compact('company'));
    }
    //Edit data
    public function showEditForm(Request $request, $id){
        $company=company::find($id);
        return view('frontend.crud.update',compact('company'));
    }
    public function submitFromData(Request $request,$id){

       $company=company::find($id);
       $company->update([
           'name'=>$request->name,
           'slug'=>Str::slug($request->name),
           'address'=>$request->address
       ]);
       $request->session()->flash('message', "Company updated successfully.");
       return redirect('companies');
    }
    public function showCompanyForm(){
        return view('frontend.crud.create');
    }
    public function showCompanydata(Request $request){
        $request->validate([
            'name' => 'required|unique:companies',
            'address' => 'required',
        ]);

        company::create([
            'name'=>$request->name,
           'slug'=>Str::slug($request->name),
           'address'=>$request->address
        ]);
    //Session::flash('message', "Company added successfully.");
    $request->session()->flash('message', "Company added successfully.");
        return redirect('companies');
       //return back();
    }
    public function deleteData($id){
        $company=company::find($id);
        Session::flash('dmessage', "Company deleted successfully.");
        $company->delete();
        return redirect('companies');
    }
}

