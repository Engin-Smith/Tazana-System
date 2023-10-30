<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $search =request()->query('search');
         if($search){
             $employees = Employee::where('emp_id', 'LIKE', "%{$search}%")
             ->orWhere('emp_name', 'LIKE', "%{$search}%" )->simplePaginate(3    );
         } else {
             $employees = Employee::paginate(10);
         }
 
        return view('employee.index', compact('employees'))
         ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request , Employee $employee)
    {
        //
        $request->validate([
            // 'emp_id' => 'required',
            'emp_name' => 'required',
            'emp_gender' => 'required',
            'emp_dob' => 'required',
            'emp_address' => 'required',
            'emp_phone' => 'required',
            'emp_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $input = $request->all();
        $employee->emp_id = IdGenerator::generate(['table' => 'tblemployees', 'field' => 'emp_id', 'length' => 6, 'prefix' => 'EMP']);
        $employee->emp_name = $request->emp_name;
        $employee->emp_gender = $request->emp_gender;
        $employee->emp_dob = $request->emp_dob;
        $employee->emp_address = $request->emp_address;
        $employee->emp_phone = $request->emp_phone;
        
        $path = $request->file('emp_img');
       $image = $path->getClientOriginalName();
       $path->move(public_path('image/employee/'), $image);
       $employee->emp_img = $image;

        $employee->save();

        return redirect()->route('employee.index')
                        ->with('success','Employee created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        //
        return view('employee.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        //
        // $employee= Employee::find($emp_id);
        return view('employee.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Employee $employee)
    {
        //
       
        // $request->validate([
        //     // 'ass_id' => 'required',
        //     'emp_name' ,
        //     'emp_gender' ,
        //     'emp_dob' ,
        //     'emp_address' ,
        //     'emp_phone' ,
        //     // 'emp_img' ,
        // ]);

        $input = $request->all();

        // if ($image = $request->file('emp_img')) {
        //     $destinationPath = 'image/employee/';
        //     $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        //     $image->move($destinationPath, $profileImage);
        //     $input['emp_img'] = "$profileImage";
        // }else{
        //     unset($input['image/employee/']);
        // }

        $employee->update($input);

        return redirect()->route('employee.index')
                        ->with('success','Employee updated successfully');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        //
        $employee->delete();
            return redirect()->route('employee.index')
            ->with('success','Employee Delete successfully.');
    }
}
