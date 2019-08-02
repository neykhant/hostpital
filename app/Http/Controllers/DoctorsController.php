<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreDoctorRequest;
use App\Doctor;

class DoctorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = Doctor::all();

        return view('doctors.index', compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('Doctors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDoctorRequest $request)
    {
        //$slug =uniquid();

         Doctor::create([
             'name'=>$request->name,
             'address'=>$request->address,
             'specialist'=>$request->specialist,
             'phone'=>$request->phone,
             'email'=>$request->email,
             'salary'=>$request->salary,
             //'slug'=>$slug,
             'password'=>$request->password

         ]);

         return redirect(route('doctors.create'))->with('msg' ,'Doctor has been add successfuly!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $doctor = Doctor::whereId($id)->firstOrFail();
        return view('doctors.show', compact('doctor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctor = Doctor::whereId($id)->firstOrFail();
        return view('doctors.edit', compact('doctor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreDoctorRequest $request, $id)
    {
        $status = 1;
        if($request->status !=null){
            $status = 0;
        }else {
            $status =1;
        }

        Doctor::where('id',$id)
            ->update([
                'name' => $request->name,
                'address' => $request->address,
                'specialist' => $request->specialist,
                'email' => $request->email,
                'phone' => $request->phone,
                'salary' => $request->salary,
                'password' => $request->password,
                //'status' => $status

            ]);
            return redirect(route('doctors.edit',$id))->with('msg', "Doctor '{$id}' 
            hsa been updated! ");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doctor = Doctor::whereId($id)->firstOrFail();
        $doctor->delete();
        return redirect(route('doctors.index', $id))->with('secondary', "Doctor '{$id}' has been delete! ");
    }
}
