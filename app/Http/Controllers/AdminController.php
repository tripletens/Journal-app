<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Journals;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    use AuthenticatesUsers;
    public function index()
    {
        return view('auth.admin-login');
    }
    protected $redirectTo = '/home';
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required|min:8'
        ]);

        $email = $request->input('email');
        // $password = \Hash::make($request->input('password'));
        $password = $request->input('password');
        // Hash::check($oldpassword, $user_password);
        // echo true; exit();
        if (Auth::attempt(['email' => $email, 'password' => $password, 'role' => 'admin', 'status' => 1])) {
            // return redirect('/admin/dashboard');
            return redirect()->intended('/home');
        } else {
            return redirect('/admin/login')->with('error', 'Email Address / Password Mismatch');
        };
    }

    public function get_all_users(){
        $all_users = User::orderBy('id', 'DESC')->get();
        $data = [
            'users' => $all_users
        ];
        return view('pages.all_users')->with($data);
    }
    public function approve_journal($id){
        $journal = Journals::find($id);
        if($journal !== null){
            $journal->status = true;
            $save = $journal->save();
            if($save){
                $data = [
                    'success'=> 'Journal Approved'
                ];
                return redirect('/journals/view')->with($data);
            }

        }
    }
    public function disapprove_journal($id)
    {
        $journal = Journals::find($id);
        if ($journal !== null) {
            $journal->status = false;
            $save = $journal->save();
            if ($save) {
                $data = [
                    'error' => 'Journal Rejected'
                ];
                return redirect('/journals/view')->with($data);
            }
        }
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
}
