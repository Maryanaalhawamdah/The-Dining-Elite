<?php

namespace App\Http\Controllers;

use App\Models\AdminUser;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Users = AdminUser::all();
        return view ('admin.sidebar.user')->with('Users', $Users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add.user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        AdminUser::create($input);
        return redirect('User')->with('flash_message', 'User Addedd!'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdminUser  $adminUser
     * @return \Illuminate\Http\Response
     */
    public function show(AdminUser $adminUser, $id)
    {
        $User = AdminUser::onlyTrashed()->get();
        return view('User.softdelete' , compact('User'));
        return $User;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdminUser  $adminUser
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $User = AdminUser::find($id);
        return view('admin.edit.user')->with('Users', $User);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdminUser  $adminUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $User = AdminUser::find($id);
        $input = $request->all();
        $User->update($input);
        return redirect('admin.sidebar.user')->with('flash_message', 'User Updated!'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdminUser  $adminUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdminUser $adminUser, $id)
    {
        AdminUser::destroy($id);
        return redirect()->route('admin.sidebar.user');
    }
}
