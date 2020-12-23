<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Job;
use App\Http\Requests\jobRequest;

class employeeController extends Controller
{
    public function employeehome(){
        if(session('type')=='Employee')
        {
            return view('employee.home');     
        }
        else
        {
            return redirect('/login');
        }
    }  
    
    public function joblist(){
        if(session('type')=='Employee')
        {
            $job = Job::all();
            return view('employee.joblist')->with('job', $job);     
        }
        else
        {
            return redirect('/login');
        }
    }

    public function create(){
        if(session('type')=='Employee')
        {
           return view('employee.create');    
        }
        else
        {
            return redirect('/login');
        }
    }

    public function store(jobRequest $req){
        if(session('type')=='Employee')
        {
            $job = new Job();

            $job->companyname    = $req->companyname;
            $job->jobtitle       = $req->jobtitle;
            $job->joblocation    = $req->joblocation;
            $job->salary         = $req->salary;

            if($job->save()){
                 return redirect()->route('employee.joblist');
             }    
        }
        else
        {
            return redirect('/login');
        }
    }

    public function edit($id){
        if(session('type')=='Employee')
        {
           $job = Job::find($id);
           return view('employee.edit', $job);
        }
        else
        {
            return redirect('/login');
        } 
    }

    public function update($id, jobRequest $req){
        if(session('type')=='Employee')
        {
            $job = Job::find($id);

            $job->companyname    = $req->companyname;
            $job->jobtitle       = $req->jobtitle;
            $job->joblocation    = $req->joblocation;
            $job->salary         = $req->salary;

            $job->save();

            if($job->save()){
                return redirect()->route('employee.joblist');
            }  
        }
        else
        {
            return redirect('/login');
        } 
        
    }

    public function show($id){
        if(session('type')=='Employee')
        {
           $job = Job::find($id);
           return view('employee.show', $job);
        }
        else
        {
            return redirect('/login');
        } 
        
    }

    public function delete($id){
        if(session('type')=='Employee')
        {
           $job = Job::find($id);
           return view('employee.delete', $job);
        }
        else
        {
            return redirect('/login');
        } 
    }

    public function destroy($id){
        if(session('type')=='Employee')
        {
            $job = Job::find($id);
            if($job->delete()){
                return redirect()->route('employee.joblist');
            }
        }
        else
        {
            return redirect('/login');
        } 
    }
}