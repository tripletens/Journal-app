<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Journals;
use App\User;
use App\Orders;
use App\Transactions;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $journals = Journals::where('status',1)->count();
        $myjournals = Journals::where('user_id',$user_id)->get();
        $transactions = Transactions::where('user_id',$user_id)->get();


        // echo $transactions; exit();
        $data = [
            'journals'=> $journals,
            'myjournals'=>$myjournals,
            'transactions'=>$transactions,
            'orders' => $user->orders
        ];
        return view('home')->with($data);
    }
}
