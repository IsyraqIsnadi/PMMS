<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('user.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $users = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'matric_id' => $request->matric_id,
            'gender' => $request->gender,
            'phone_number' => $request->phone_number,
            'staff_id' => $request->staff_id,
            'year' => $request->year,
            'program' => $request->program,
        ]);

        return redirect(route('user.index', $users->id));

    }

    /**
     * Display the specified resource.
     */
    public function show(User $users)
    {
        //
    }

    /**
     * edit the specified resource in storage.
     */
    public function edit(User $user)
    {
        return view('user.edit', ['user' => $user]);

    }

    /**
     * update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $user->name = $request->name;
        $user->email = $request->email;
        $user->matric_id = $request->matric_id;
        $user->gender = $request->gender;
        $user->phone_number = $request->phone_number;
        $user->staff_id = $request->staff_id;
        $user->year = $request->year;
        $user->program = $request->program;
        $user->update();

        return redirect()->route('user.index', [$user->id]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect(route('user.index'));
    }
}
