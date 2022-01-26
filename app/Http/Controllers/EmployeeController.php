<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $employee = Employee::get();
        return view('employee.index',compact('employee'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'position' => 'required',
            'phone' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);
        $input = $request->all();
        $input['user_id'] = Auth::id();
        if ($image = $request->file('image')) {
            $imagePath = 'imageEmployee/';
            $employeeImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($imagePath, $employeeImage);
            $input['image'] = "$employeeImage";
        }
//        dd($input);
        Employee::create($input);
        Toastr::success('Successfully', 'Create', ["positionClass" => "toast-top-right"]);
        return redirect(route('employee.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        return view('employee.edit',compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'position' => 'required',
            'phone' => 'required',
        ]);
        $input = $request->all();
        if ($image = $request->file('image')) {
            $imagePath = 'imageEmployee/';
            $employeeImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($imagePath, $employeeImage);
            $input['image'] = "$employeeImage";
        }
        $employee->update($input);
        Toastr::success('Successfully', 'Update', ["positionClass" => "toast-top-right"]);
        return redirect(route('employee.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        Toastr::error('Successfully', 'Delete', ["positionClass" => "toast-top-right"]);
        return redirect(route('employee.index'));
    }
}
