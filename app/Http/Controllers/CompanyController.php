<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Company;
use Auth;
use User;


class CompanyController extends Controller
{
    

    public function storeCompany(Request $request){
        $id = Auth::user()->id;
        $company = new Company;
        $this->validate($request,[
            'name'=>'required',
            'email'=>['required', 'string', 'email', 'max:255', 'unique:companies'],
            'name'=>'required',
            'type' =>'required',
            'size' =>'required',
        ]);
        $company->id = $id;
        $company->name = $request->name;
        $company->email = $request->email;
        $company->type = $request->type;
        $company->size = $request->size;
        $company->save();
        $user =Auth::user();
        $user->company_id = $id;
        $user->save();
        return redirect('home');
    }

    public function companyProfile(){
        $id = Auth::user()->id; 
        $company = Company::find($id);
        return view('company.profile',compact('company'));
    }


}
