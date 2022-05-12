<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Complaint;
use App\Mail\SendComplaint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ComplaintController extends Controller
{

    public function index()
    {
        return view('pages.complaints');
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        // Validating
        $this->validate($request, [
            'title' => 'required',
            'name' => 'required|min:5',
            'email' => 'required|email|unique:complaints',
            'subject' => 'required',
            'policyno' => 'required',
            'phonenumber' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|numeric',
            'nic' => 'required',
            'contactmethod' => 'required',
            'solutiontype' => 'required',
            'message' => 'required',
        ]);


        $complaints = new Complaint();

        $title_drop = $request->title;
        $subject_drop = $request->subject;
        $contactmethod_drop = $request->contactmethod;
        $solutiontype_drop = $request->solutiontype;


        $complaints->complaint_id = Helper::IDGenerator(new Complaint, 'complaint_id', 5, 'COM');
        $complaints->title = $title_drop;
        $complaints->name = $request->name;
        $complaints->email = $request->email;
        $complaints->subject = $subject_drop;
        $complaints->policyno = $request->policyno;
        $complaints->phonenumber = $request->phonenumber;
        $complaints->nic = $request->nic;
        $complaints->contactmethod = $contactmethod_drop;
        $complaints->solutiontype = $solutiontype_drop;
        $complaints->message = $request->message;

        $complaints->save();


        // Send Email
        $data = array(
            'complaint_id' => $request->complaint_id,
            'title' => $request->title,
            'name'      =>  $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'policyno' => $request->policyno,
            'phonenumber' => $request->phonenumber,
            'nic' => $request->nic,
            'contactmethod'   =>   $request->contactmethod,
            'solutiontype'   =>   $request->solutiontype,
            'message' => $request->message
        );

        Mail::to('chamal.j@coopinsu.com')->send(new SendComplaint($data));
        return back()->with('success', 'THANK YOU. WE GOT YOUR COMPLAINT. WE WILL CONTACT YOU SOON...');
    }


    public function show(Complaint $complaint)
    {
        //
    }


    public function edit(Complaint $complaint)
    {
        //
    }


    public function update(Request $request, Complaint $complaint)
    {
        //
    }


    public function destroy(Complaint $complaint)
    {
        //
    }
}
