<?php

namespace App\Http\Controllers;

use App\Http\Requests\AppointmentRequest;
use App\Models\Appointment;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\SpladeTable;

class AppointmentController extends Controller
{
    public function index()
    {
        $appointments = SpladeTable::for(Appointment::class)
            ->column('name')
            ->column('phone')
            ->column('email')
            ->column('service')
            ->column('city')
            ->column('created_at')
            ->paginate(10);
        return view('dashboard.appointments.home', compact('appointments'));
    }
    public function client()
    {
//        $services = \App\Models\Service::where('status', 1)->get()->pluck('name','id');
        return view('appointment');
    }

    public function store(AppointmentRequest $request)
    {
        Appointment::create($request->validated());
        Toast::success('Appointment created successfully')->rightBottom();
        return redirect()->back();
    }


}
