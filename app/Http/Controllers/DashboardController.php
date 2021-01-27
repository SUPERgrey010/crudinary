<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User_list;
use App\User_access;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtUser = User_list::with('user_access')->paginate(2);
        return view("pages.dashboard.v_home", compact('dtUser'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_access = User_access::all();
        return view("pages.dashboard.v_create", compact('user_access'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        User_list::create([
            'username'      => $request->username,
            'password'      => $request->password,
            'user_access_id'  => $request->user_access
        ]);

        return redirect('/')->with('toast_success', 'Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user_access = User_access::all();
        $user = User_list::with('user_access')->findorfail($id);

        return view("pages.dashboard.v_update", compact('user', 'user_access'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User_list::findorfail($id);
        $user->update($request->all());

        return redirect('/')->with('toast_success', 'Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User_list::findorfail($id);
        $user->delete();

        return back()->with('info', 'Successfully!');
    }
}
