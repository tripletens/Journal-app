<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Journals;
use App\Mail\TransactionMail;
class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        return view('pages.view-cart');
    }

    public function add_to_cart(Request $request,$id){
        //
        $journal_one = Journals::find($id);
        // session
        $cart = $request->session()->get('cart');
        //check if cart is empty
        // echo json_encode($journal_one); exit();
        if(!$cart){
            //push the id into the cart array
            // `title`, `description`, `link`, `field`,
            //  `institution`, `country`, `created_at`,
            //   `updated_at`, `status`, `image`, `price`,
            //    `user_id`,
            $cart[$id] = [
                'id' => $id,
                'title' => $journal_one->title,
                'description' => $journal_one->description,
                'link' => $journal_one->link,
                'field' => $journal_one->field,
                'institution' => $journal_one->institution,
                'country' => $journal_one->country,
                'image' => $journal_one->image,
                'price' => $journal_one->price
            ];
            session()->put('cart', $cart);
            // echo var_dump(session('cart'));exit();
            return redirect()->back()->with(['success' => 'Journal added to cart']);
        };
            // echo $id;  exit();
            //check if the id is in the cart array
            // $array_keys = array_keys($cart);
            if (isset($cart[$id])) {
                return redirect()->back()->with(['error' => 'Journal already in cart']);
            }
            // if (in_array($id, $array_keys)) {

            //     return redirect()->back()->with(['error' => 'Journal already in cart']);
            // }

            $cart[$id] = [
                    'id' => $id,
                    'title' => $journal_one->title,
                    'description' => $journal_one->description,
                    'link' => $journal_one->link,
                    'field' => $journal_one->field,
                    'institution' => $journal_one->institution,
                    'country' => $journal_one->country,
                    'image' => $journal_one->image,
                    'price' => $journal_one->price
            ];

                session()->put('cart', $cart);
                return redirect()->back()->with(['success' => 'Journal added to cart..']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

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
    public function destroy(Request $request,$id)
    {
        $cart = session()->get('cart');
        // echo var_dump($cart); exit();

        if(isset($cart[$id])){
            // echo $id;
            // exit();

            unset($cart[$id]);
            session()->put('cart', $cart);
        }
        return redirect()->back()->with(['success' => 'Journal removed successfully ']);
    }
}
