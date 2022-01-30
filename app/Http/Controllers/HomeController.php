<?php

namespace App\Http\Controllers;

use App\Models\Doctors;
use App\Models\MakeAppointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    public function redirect()
    {
        if (Auth::id()) {
            if (Auth::User()->usertype == "0") {
                $doctor = Doctors::all();
                return route('Home');
            } else {
                return route('dashboard');
            }
        } else {
            return Redirect()->back();
        }
    }

    public function index()
    {
        $doctor = Doctors::all();

        return view('front.index');
    }
    public function index2()
    {

        return view('backend.dashboard');
    }
    public function allDoctors()
    {
        $doctor = Doctors::all();

        return view('front.allDoctor', compact('doctor'));
    }

    public function appointment(Request $request)
    {
        $data = new MakeAppointment;
        $data->name = $request->name;
        $data->phone = $request->phone;
        $data->type_of_service = $request->type_of_service;
        $data->data = $request->data;
        $data->from = $request->from;
        $data->to = $request->to;
        $data->staff = $request->staff;
        //$data->status='pending';

        // if(Auth::id()){

        // $data->user_id=Auth::user()->id;
        //             }
        $data->save();
        return redirect()->back()->with('message', 'We have received your query and get in contact with you soon');
    }

    public function myAppointment()
    {

        // if (Auth::id())
        // {
        // $userid=Auth::user()->id;
        $appoint = MakeAppointment::get();
        return view('front.myAppointment', compact('appoint'));
        // }else{
        //     return redirect()->back();
        // }

    }
    public function cancelAppointment($id)
    {
        $data = MakeAppointment::find($id);
        $data->delete();
        return redirect()->back();
    }
}
