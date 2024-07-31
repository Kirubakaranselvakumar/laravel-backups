<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $sort = $request->input('sort', 'id');
        $sortOrder = $request->input('sort_order', 'asc');
        // $query = student::query();
        // if ($search) {
        //     $query->where('name', 'like', "%$search%")
        //         ->orWhere('email', 'like', "%$search%")
        //         ->orWhere('age', 'like', "%$search%")
        //         ->orWhere('id', 'like', "%$search%")
        //         ->orWhere('phone', 'like', "%$search%");
        //     }
        // $model1 = student::all();
        // $tables = $query->orderBy($sort, $sortOrder)->paginate(10);
        // $tables->appends(['search' => $search, 'sort' => $sort, 'sort_order' => $sortOrder]);

        if ($search) {
            $tables = student::where('id', 'like', "%$search%")
            ->orWhere('name', 'like', "%$search%")
            ->orWhere('email', 'like', "%$search%")
            ->orWhere('age', 'like', "%$search%")
            ->orWhere('phone', 'like', "%$search%")
            ->orderBy($sort, $sortOrder)
            ->paginate(5);
        } else {
            // Query to retrieve data without search
            $tables = student::orderBy($sort, $sortOrder)->paginate(5);
        }

        return view('crud.index', compact('tables', 'sort', 'sortOrder', 'search'));

        // return view('crud.index', compact('model1'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crud.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student = new Student;
        $student->name = $request->input('name');
        $student->age = $request->input('age');
        $student->email = $request->input('email');
        $student->phone = $request->input('mobile');
        $student->image = $request->input('image');
        if($request->hasfile('profile_image'))
        {
            $file = $request->file('profile_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/students/', $filename);
            $student->image = $filename;
        }
        $student->save();
        return redirect('/')->with('status','Student Details Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = student::find($id);
        return view('crud.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student = student::find($id);
        $student->name = $request -> input('name');
        $student->email = $request -> input('email');
        $student->age = $request -> input('age');
        $student->phone = $request -> input('mobile');

        if($request->hasFile('profile_image')){
            $des = 'uploads/students'.$student->image;

            if(File::exists($des)){
                File::delete(($des));
            }
            $file = $request->file('profile_image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.'.$ext;
            $file->move('uploads/students',$filename);
            $student-> image = $filename;

        }
        $student -> update();
        return redirect('/')->with('status','Student Details Successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $student = student::find($id);
        $destination = 'uploads/students/'.$student->profile_image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $student->delete();
        return redirect()->back()->with('status','Student Image Deleted Successfully');

    }
}
