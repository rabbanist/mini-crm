<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
=======
use App\Http\Requests\UserUpdateRequest;
>>>>>>> 5e6e33e (user curd done with soft delete)
use App\Models\user;
use Illuminate\Http\Request;
use App\Http\Requests\UserStoreRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User:: paginate(7);
        return view('user.index', compact('users'));
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
    public function store(UserStoreRequest $request)
    {
        User::create($request->validated());
        return redirect()->route('users.index');
    }

    /**
<<<<<<< HEAD
     * Display the specified resource.
     */
    public function show(user $user)
    {
        //
    }

    /**
=======
>>>>>>> 5e6e33e (user curd done with soft delete)
     * Show the form for editing the specified resource.
     */
    public function edit(user $user)
    {
<<<<<<< HEAD
        //
=======
        return view('user.edit', compact('user'));
>>>>>>> 5e6e33e (user curd done with soft delete)
    }

    /**
     * Update the specified resource in storage.
     */
<<<<<<< HEAD
    public function update(Request $request, user $user)
    {
        //
=======
    public function update(UserUpdateRequest $request, user $user)
    {
        $user->update($request->validated());
        return redirect()->route('users.index');
>>>>>>> 5e6e33e (user curd done with soft delete)
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(user $user)
    {
<<<<<<< HEAD
        //
=======
        $user->delete();
        return redirect()->route('users.index');
>>>>>>> 5e6e33e (user curd done with soft delete)
    }
}
