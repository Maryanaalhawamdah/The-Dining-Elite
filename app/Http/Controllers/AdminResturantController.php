<?php

namespace App\Http\Controllers;

use App\Models\AdminResturant;
use Illuminate\Http\Request;

class AdminResturantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Resturants = AdminResturant::all();
        return view ('admin.sidebar.resturant')->with('Resturants', $Resturants);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add.resturant');
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
        AdminResturant::create($input);
        return redirect('Resturant')->with('flash_message', 'Resturant Addedd!'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdminResturant  $adminResturant
     * @return \Illuminate\Http\Response
     */
    public function show(AdminResturant $adminResturant,  $id)
    {
        $Resturant = AdminResturant::onlyTrashed()->get();
        return view('Resturant.softdelete' , compact('Resturant'));
        return $Resturant;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdminResturant  $adminResturant
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Resturant = AdminResturant::find($id);
        return view('admin.edit.resturant')->with('resturant', $Resturant);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdminResturant  $adminResturant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Resturant = AdminResturant::find($id);
        $input = $request->all();
        $Resturant->update($input);
        return redirect('admin.sidebar.resturant')->with('flash_message', 'Resturant Updated!'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdminResturant  $adminResturant
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdminResturant $adminResturant, $id)
    {
        AdminResturant::destroy($id);
        return redirect()->route('admin.sidebar.Resturant');
    }
}
