<?php

namespace App\Http\Controllers;

use App\Models\Doctors;
use App\Models\MakeAppointment;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function addDoctor()
    {
        return view('backend.doctorsData');
    }
    public function uploadDoctor(Request $request)
    {
        $doctor = new Doctors;
        $image = $request->file;
        $name = $request->file('image')->getClientOriginalName();

        $path = $request->file('image')->store('public/DoctorsImages');

        $doctor->image = $name;

        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->room = $request->room;
        $doctor->specility = $request->specility;

        $doctor->save();
        return redirect()->back()->with('message', 'Doctor added Successfully');
    }

    public function   showAppointment()
    {

        $data = MakeAppointment::all();
        return view('front.showappointment', compact('data'));
    }

    public function approve($id)
    {
        $data = MakeAppointment::find($id);
        $data->status = 'approved';
        $data->save();
        return redirect()->back();
    }
    public function cancel($id)
    {
        $data = MakeAppointment::find($id);
        $data->status = 'canceled';
        $data->save();
        return redirect()->back();
    }

    public function showDoctors()
    {
        return Doctors::all();
    }

    public function deleteDoctor($id)
    {
        Doctors::where('id')->delete();
    }
}
