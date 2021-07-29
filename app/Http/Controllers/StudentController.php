<?php

namespace App\Http\Controllers;
// import student model
use App\Models\Student;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // query in database
        $studentList = student::get(); //select * from student database

        // debug
        // dd($studentList);

        // to view the webpage student view
        // return view('students.student');

        // return view('students.studentList');

        // pass database info to view
        return view('students.studentList',[
            // $studentList var name in controller
            // 'students' var name in view
            'studentlist' => $studentList,
            'studentlist' => DB::table('students')->paginate(15)
        ]);

        // $students = DB::table('students')->paginate(15);

        // return view('students.student', ['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.student');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // data sent to database saved on request variable
    public function store(Request $request)
    {
        // use dd for diedump for debugging
        // dd($request);
        Student::create([
            // NO space $request->studentid
            'studentid' => $request->studentid,
            'firstName' => $request->firstName,
            'middleName' => $request->middleName,
            'lastName' => $request->lastName,
            'address' => $request->address,
        ]);
        // go back to student list after saving
        return redirect()->route('students.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $edit = Student::find($id);

        return view('students.editstudent', [
            'editstudent' => $edit
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('students.editStudent', [
             'editStudent' => Student::find($id) //select * from students
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $student = Student::find($request->id);

        $student->studentid = $request->studentid;
        $student->firstName = $request->firstName;
        $student->middleName = $request->middleName;
        $student->lastName = $request->lastName;
        $student->address = $request->address;

        $student->save();

        return redirect()->route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        // $student = Student::find($request->id);

        // $student->delete();

        $deletestudent = Student::find($request->id);
        $deletestudent->delete();
        return redirect()->route('students.index');
    }

}
