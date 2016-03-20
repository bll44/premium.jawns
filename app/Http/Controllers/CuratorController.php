<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Validator;
use DB;
use App\Curator;
use Hash;
use Auth;
use Redirect;

class CuratorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getCreateCurator()
    {
        return view('curator/create_curator');
    }

    public function postCreateCurator(Request $http, Curator $curator)
    {
        $validator = Validator::make($http->all(), [
                'name' => 'required',
                'username' => 'required',
                'email' => 'required|email',
                'password' => 'required|confirmed|min:6'
            ]);

        if($validator->fails())
        {
            return redirect::to('curator/create')->withInput();
        }

        $curator->name = $http->name;
        $curator->username = $http->username;
        $curator->email = $http->email;
        $curator->password = Hash::make($http->password);
        $curator->admin = strtolower($http->admin) === 'on' ? 1 : 0;

        $curator->save();

        return redirect('curator/create')->with('message', 'Created new curator successfully.');
    }

    public function getCuratorLogin()
    {
        return view('auth/login');
    }

    public function postCuratorLogin(Request $http, Curator $curator)
    {
        if(Auth::attempt(['username' => $http->username, 'password' => $http->password]))
            return redirect::intended('/');
        else
            return redirect::to('login');
    }
}
