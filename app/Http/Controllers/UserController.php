<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\Users;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $users = Users::all();
        return view('user.user', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('user.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $user = new Users;
        $user->name = $request->name;
        $user->username = $request->username;
        $user->password = $request->password;
        $user->email = $request->email;

        $user->save();
        return redirect('app/user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       
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
        $user = Users::find($id);

    public function edit($id)
    {
        $user = Users::find($id);
        return view('user.edit')->with('user', $user);;
    // public function edit($user_id)
    // {
      
    //     $user = Users::find($user_id);

    //     return view('user.edit')->with('user', $user);

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
        $user = Users::find($id);

        $user = Users::find($id);;
        $user->name = $request->name;
        $user->username = $request->username;
        $user->password = $request->password;
        $user->email = $request->email;


        // $user = Users::find($user_id);

        // $user->nama = $request->nama;
        // $user->username = $request->username;
        // $user->email = $request->email;
        // $user->password = $request->password;


        $user->save();
        return redirect('app/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // die('hard');
        $user = Users::find($id);

        $user = Users::find($id);
        $user->delete();
        return redirect('app/user');
    }

    public function SignIn(Request $request)
    {
        if(Auth::attempt(['email' => $request['email'], 'password' => $request['password']])){
            return redirect('/app/home');
        }
        return redirect()->back();

       
        $user = Users::find($user_id);
        $user->delete();
        return redirect('app/user');
    }
}
