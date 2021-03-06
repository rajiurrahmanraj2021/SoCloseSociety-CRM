<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use App\Models\UserRole;
use Illuminate\Http\Request;

class UserRoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.user_role.index',[
            'roles' => UserRole::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('admin.user_role.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'role'        => 'required|unique:user_roles',
        ]);

        UserRole::insert([
            'role'       => $request->role,
            'permission' => json_encode($request->permission),
            'created_at' => Carbon::now(),
        ]);

        return redirect()->route('user_role.index')->withSuccess('Role Created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserRole  $userRole
     * @return \Illuminate\Http\Response
     */
    public function show(UserRole $userRole)
    {   
        $single_role_info = UserRole::find($userRole->id);;
        
        return view('admin.user_role.show', compact('single_role_info'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserRole  $userRole
     * @return \Illuminate\Http\Response
     */
    public function edit(UserRole $userRole)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserRole  $userRole
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserRole $userRole)
    {
        $userRole->update([
            'role'        => $request->role,
            'permission'  => json_encode($request->permission),
            'created_at'  => Carbon::now(),
        ]);
        $userRole->save();

        return redirect()->route('user_role.index')->withSuccess('Role Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserRole  $userRole
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserRole $userRole)
    {
        User::where('role_id',$userRole->id)->delete();
        $userRole->delete();
        return redirect()->route('user_role.index')->withDanger('Role Deleted Successfully');
    }
}
