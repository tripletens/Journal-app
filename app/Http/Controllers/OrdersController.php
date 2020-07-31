<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transactions;
use App\Orders;
use App\Journals;
use App\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\TransactionMail;
use App\Mail\ContactMail;
class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request , $id=null)
    {
        //view one order

        // return view('pages.one-order')->with($data);
    }

    public function all()
    {
        //view all orders by admin
        return view('pages.orders');
    }
    public function myorders(Request $request, $id = null)
    {
        //view users order
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $orders = $user->orders;
        $row = [];

        foreach($orders as $order){

            $journal_id = $order['journal_id'];
            $journal = Journals::where('id',$journal_id)->get();

            $row[] = $journal;
        }

        $user_orders = $user->orders;
        $ref = [];

        foreach($user_orders as $order_item){
            $ref[] = $order_item->reference;
        }

        $data = [
            'orders' => $row,
            'ref' => $ref
        ];

        return view('pages.orders')->with($data);
    }
    public function all_orders(){
        $orders = Orders::orderBy('id', 'DESC')->get();
        //view users order

        $data = [
            'orders' => $orders
        ];

        // echo var_dump($data); exit();
        // $data = [
        //     'orders' => $orders
        // ];
        return view('pages.orders')->with($data);
    }
    public function checkout(Request $request)
    {

        $cart = $request->session()->get('cart');

        $user_id = auth()->user()->id;
        $length = 7;
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $ref = '';

        for ($i = 0; $i < $length; $i++) {
            $ref .= $characters[rand(0, strlen($characters) - 1)];
        }


        // return $request->amount;
        // return json_encode($cart);
        // // return response()->json(json_encode([$cart]),200,['Content-Type', 'application/json']);
        // exit();
        // `user_id`, `email`, `amount`, `payment_method`, `reference`,
        // insert into the transactions table

        $email = auth()->user()->email;
        $payment_method = 'card';
        $reference = $request->reference;
        $amount = $request->amount;
        // echo $amount; exit();
        $save_data = Transactions::create([
            'user_id' => $user_id,
            'email' => $email,
            'payment_method' => $payment_method,
            'reference' => $reference,
            'amount'=> $amount,
            'order_reference' => 'REF-' . $ref
        ]);
        // echo $save_data; exit();
        // $orders = [];
        if($save_data){
            foreach ($cart as $journal) {
                // insert into the orders table
                Orders::create([
                    'user_id' => $user_id,
                    'journal_id' => $journal['id'],
                    'reference' => 'REF-' . $ref,
                    'image'=>$journal['image'],
                    'title'=>$journal['title'],
                    'description'=>$journal['description'],
                    'link'=>$journal['link'],
                    'price'=>$journal['price'],
                    'transaction_id'=> $reference
                ]);
                // $orders = [
                //     'user_id' => $user_id,
                //     'journal_id' => $journal['id'],
                //     'reference' => 'REF-' . $ref,
                //     'image' => $journal['image'],
                //     'title' => $journal['title'],
                //     'description' => $journal['description'],
                //     'link' => $journal['link'],
                //     'price' => $journal['price'],
                //     'transaction_id' => $request->reference
                // ];
            };


            $orders = Orders::where('reference', 'REF-' . $ref)->orderBy('id', 'DESC')->get();

            $data = [
                'order_reference' => 'REF-' . $ref,
                'payment_method' => $payment_method,
                'transaction_id' => $request->reference,
                'amount' => $amount,
                'status' => 'success',
                'orders'=> $orders,
                'date' => date('Y-m-d')
            ];
            Mail::to($email)->send(new TransactionMail($data));
            // $request->session()->get('cart')->forget();
            $request->session()->forget('cart'); // please enable it back
            // return Mail::to($email)->send(new TransactionMail($data));
            return response()->json($data);
        }else{
           return response()->json('error');
        }


        // return $request;
        // return Response()->json($request->cart);
    }
    public function invoice(Request $request, $reference){

        $orders = Orders::where('reference',$reference)->get();


        if(count($orders) > 0 ){
            $o = $orders->first();

            $data = [
                'orders' => $orders,
                'reference' => $reference,
                'date' =>  $o
            ];
            return view('pages.invoice')->with($data);
        }else{
            return redirect('/journals/view');
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
