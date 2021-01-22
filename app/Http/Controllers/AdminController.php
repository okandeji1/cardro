<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\Response;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::guest()) {
            //is a guest so redirect
            return redirect('/auth-login');
        }
        if(Gate::allows('isSuperAdmin')){
            try {
                //code...
                $admins = User::orderBy('created_at', 'desc')->paginate(20);
                return view('pages.user.manage_admin')->with('admins', $admins);
            } catch (\Throwable $th) {
                //throw $th;
                return redirect()->back()->with(['error' => 'An error occur while loading this page']);
            }
        }else {
            return Response::deny('You must be a super administrator.');
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::guest()){
            //is a guest so redirect
            return redirect('/auth-login');
        }
        if(Gate::allows('isSuperAdmin')){
            try {
                //code...
                $roles = Role::all();
                return view('pages.user.create_admin')->with('roles', $roles);
            } catch (\Throwable $th) {
                //throw $th;
            }
        }else {
            return Response::deny('You must be a super administrator.');
        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'fullname' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'phoneNumber' => 'required|numeric',
            'state' => 'required',
            'country' => 'required',
            'address' => 'required',
            'city' => 'required',
            'region' => 'required',
            'role' => 'required',
        ]);

        $data = $request->only(['fullname', 'email', 'password', 'phoneNumber', 'state', 'country', 'address', 'city', 'region', 'role']);
        $hashPassword = bcrypt($data['password']);        
        // Check if user already exit
        if(User::where('email', $data['email'])->exists()){
            return back()->with('error', ' Email already exist!');
        }else {
            //Get role by name
            $role = Role::where('admin', $data['role'])->firstOrFail();
            $role_id = $role->id;
            $user = new User();
            $user->uuid = Uuid::uuid4();
            $user->fullname = $data['fullname'];
            $user->email = $data['email'];
            $user->password = $hashPassword;            
            $user->phoneNumber = $data['phoneNumber'];
            $user->state = $data['state'];
            $user->country = $data['country'];
            $user->address = $data['address'];
            $user->city = $data['city'];
            $user->region = $data['region'];
            $user->role_id = $role_id;
            $user->save();
            // Create access token
            $user->createToken('cbl')->accessToken;
            // Redirect user
            return redirect('/manage-admin')->with('success', ' New User Created Successfully');
        }
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
    public function edit($uuid)
    {
        if (Auth::guest()) {
            //is a guest so redirect
            return redirect('/auth-login');
        }
        if(Gate::allows('isSuperAdmin')){
            try {
                //code...
                $admin = User::where('uuid', '=' ,$uuid)->first();
                return view('pages.user.edit_admin')->with('admin', $admin);
            } catch (\Throwable $th) {
                //throw $th;
            }
        }else {
            return Response::deny('You must be a super administrator.');
        }
        
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
}
