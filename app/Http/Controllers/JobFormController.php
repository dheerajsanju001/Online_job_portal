<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{job_form,AdminUser};
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Hash;


class JobFormController extends Controller
{
    //****************************CANDIDATE INFO FUNCTION SAVE JOB FORM DATA******************* */
    public function CandidateInfo(Request $request)
    {
        $Validate=Validator::make($request->all(),

        [
            'name'=>'required',
            'email'=>'required|unique:job_forms',
            'country'=>'required',
            'password'=>'required',
            'date'=>'required',
            'qualification'=>'required',
            'address'=>'required',
            'postcode'=>'required',
            'state'=>'required',
            'city'=>'required',
            'experience'=>'required',
            'hobby'=>'required',
            'phone'=>'required',
            'radio'=>'required',
            'image'=>'required',


        ]);
        if($Validate->fails()){
            return response()->json([
                'message' =>$Validate->errors(),
            ],412);
        }
        $image=$request->image;
        $name=$image->getClientOriginalName();
        $image->storeAs('public/store',$name);
      $data= job_form::create([
            'name'=>$request->name,
            'country'=>$request->country,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'date'=>$request->date,
            'qualification'=>$request->qualification,
            'postcode'=>$request->postcode,
            'state'=>$request->state,
            'city'=>$request->city,
            'address'=>$request->address,
            'experience'=>$request->experience,
            'hobby'=>$request->hobby,
            'phone'=>$request->phone,
            'radio'=>$request->radio,
            'status'=>$request->status,
            'image'=>$name,
            'ticket'=>Str::random(10),

        ]);
    return view('JobForm',compact('data'));
    }

    //****************************ADMIN USER FUNCTION MATHCHES CREDENTIALS ARE AUTHORIZED******************* */
    public function AdminCredentials(Request $request)
    {
        $add=new AdminUser;
        if($request->isMethod('post'))
        {
            $email=$request->get('email');
            $password=$request->get('password');
            $row=AdminUser::where(['email'=>$email,'password'=>$password])->first();
            if(!empty($row))
            {
                return redirect('Applicantions');
            }
            else {
                return back()->withErrors('Please fill Right email and password');
            }
        }
        return view('JobForm');
    }

     //****************************DISPLAY CANDIDATE LIST FUNCTION SHOWS CANDIDATE APPLICATION LIST******************* */
    public function DisplayCandidateList()
    {
        $data=job_form::get();
        return view('Applicantions',compact('data'));
    }

    //****************************SHOW APLLICATION FUNCTION SHOW PARTICULAR CANDIDATE,s  INFO******************* */
    public function ShowApplication($id)
    {
        $data=job_form::where('id',$id)->get();
        return view('ReviewApplicant',compact('data'));
    }

    //****************************CHOICE FUNCTION USED TO MAINTAIN STATUS ******************* */
    public function Choice($id,$candidate)
    {
        $data=job_form::where('id',$candidate)->first();
        $data->update(['status'=>$id]);
        return redirect('Applicantions')->with('alert','Apllicant Status Updated');
    }

    //****************************DELETE APLLICANT FUNCTION USED TO DELETE APLLICATION ******************* */
    public function DeleteApplicant($id)
    {
        $ob = job_form::find($id);
        unlink(public_path('storage/store/'.$ob->image));
        $ob->delete();
        return redirect()->back()->with('alert','Candidate Apllication Deleted');
      }

      //****************************SEARCH FUNCTION USED TO SEARCH CANDIDATE WITH TICKET NUMBER ******************* */
      public function Search(Request $request)
      {
        if($request->isMethod('post'))
        {
            $name=$request->get('q');
            $data=job_form::where('ticket', $name)->get();
            return view('SearchRecord',compact('data'));
        }
      }

}

