<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Journals;
use App\Orders;

class JournalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_journals = Journals::where('status', 1)->orderBy('id', 'DESC')->paginate(5);

        $all_admin_journals = Journals::orderBy('id', 'DESC')->get();
        $data = [
            'journals' => $all_journals,
            'admin_journals' => $all_admin_journals
        ];
        return view('pages.journals')->with($data);
    }
    public function search(Request $request){
        $variable = $request->input('variable');
        $search_item = $request->input('searchitem');

        // echo $variable; exit();
        return redirect('/search-results/'.$variable.'/'.$search_item );
    }
    public function search_results(Request $request, $variable, $search_item)
    {
        switch ($variable) {
            case 'all':
                # code...
                $search_query =
                    Journals::where(
                        'title',
                        'like',
                        '%' . $search_item . '%'
                    )
                    ->orwhere(
                        'country',
                        'like',
                        '%' . $search_item . '%'
                    )
                    ->orwhere(
                        'institution',
                        'like',
                        '%' . $search_item . '%'
                    )
                    ->orwhere(
                        'field',
                        'like',
                        '%' . $search_item . '%'
                    )
                    ->where('status', 1)
                    ->orderBy('title', 'asc')
                    ->paginate(5);

                break;

            default:
                $search_query =
                    Journals::where(
                        $variable,
                        'like',
                        '%' . $search_item . '%'
                    )
                    ->where('status', 1)
                    ->orderBy('title', 'asc')
                    ->paginate(5);
                break;
        }

        $data = [
            'journals' => $search_query
        ];

        return view('pages.search')->with($data);
    }

    public function search_country($country){
        $country_search = Journals::where('country',$country)
            ->where('status', 1)
            ->orderBy('title', 'asc')
            ->paginate(5);
        $data = [
            'journals' => $country_search
        ];

        return view('pages.search')->with($data);
    }
    public function fetch_id(Request $request,$id){
        $journal = Journals::find($id);
        // echo  $journal;exit();

        if($journal != null){
            $purchase = false;
            if(auth()->user() != null){
                $user_id = auth()->user()->id;

                if(auth()->user()->role === 'user'){
                    $myJournals = Journals::where('user_id', $user_id)->get();
                    $haspaid = Orders::where('user_id', $user_id)->where('journal_id', $id)->get();
                    if (count($haspaid) > 0) {
                        $purchase = true;
                    };
                    $data = [
                        'journal' => $journal,
                        'myjournals' => $myJournals,
                        'purchase' => $purchase
                    ];
                };
                if (auth()->user()->role === 'admin') {

                };
            }

            // echo $user_id; exit(0);

            // echo var_dump($myJournals); exit();
            $data = [
                'purchase' => $purchase,
                'myjournals' => $myJournals,
                'journal' => $journal
            ];
            return view('pages.view_one_journal')->with($data);
        }else{
            return redirect('/journals/view');
        }
    }
    public function recent_journals(){
        $journals = Journals::where('status', 1)
           ->orderBy('id', 'desc')
           ->take(6)
           ->get();
        $data = [
            'recent' => $journals
        ];
        return view('ui.recent-publications')->with($data);
    }

    // this renders the create journal form
    public function show_create_journal(){
        return view('pages.create_journal');
    }
    // this processes the journal creation feature
    public function process_create_journal(Request $request){
        $title = $request->input('title');
        $description = $request->input('description');
        $link = $request->input('link');
        $field = $request->input('field');
        $institution = $request->input('institution');
        $country = $request->input('country');
        $price = $request->input('price');
        $image = $request->file('image');
        $user_id = auth()->user()->id;
        $data = $request->all();

        // echo var_dump(request()); exit();

        $rules = [
            'title' => 'required|unique:journal',
            'description' => 'required',
            'field'=>'required',
            // 'institution'=>'required',
            'country'=>'required',
            'price'=>'required',
            'image'=>'image|mimes:jpeg,png,jpg|max:20480000000'
        ];
        $messages = [];
        $path = false;
        $validator =
            Validator::make($data, $rules, $messages);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }else{
            if($request->hasFile('image')){
                //get filename with extension
                $image_name_with_ext = request()->image->getClientOriginalName();
                $image_name_without_ext = pathinfo($image_name_with_ext,PATHINFO_FILENAME);
                $extension = $request->file('image')->getClientOriginalExtension();
                $filename_to_store = $image_name_without_ext .'_' . time().'_' . $extension;
                $path = $request->file('image')->storeAs('public/journals', $filename_to_store);
            }else{
                $filename_to_store = 'noimage.jpg';
            }
            // $image_name = time() . '.' . request()->image->getClientOriginalName();
            // $upload_image = request()->image->move(public_path('/journals',$image_name));

            if(auth()->user()->role == "admin"){
                $status = 1;
            }else {
                $status = 0;
            }
            $save_data = Journals::create([
                'title' => $title,
                'description' => $description,
                'field' => $field,
                // 'institution' => $institution,
                'country' => $country,
                'link'=>$link,
                'price' => $price,
                'user_id'=>$user_id,
                'image' => $filename_to_store,
                'status' => $status
                ]);
                // echo $journal_name; exit();

            if($save_data == true){
                if($path == true){
                    return redirect()->back()->with(['success' => 'Journal saved successfully. Verification will start soonest.']);
                }else{
                    return redirect()->back()->with(['error' => 'Error Uploading file']);
                }
            }else{
                return redirect()->back()->with(['error'=>'Error saving data, Try Again later ']);
            }
        }
    }
    public function all_journals(){
       $journals =  Journals::where('status',1)->paginate(5);
       return view('pages.journals')->with(['journals'=>$journals]);
    }
    // this handles the image upload
    public function upload_file($filename, $content){

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
    public function update(Request $request, $id){
        $journal = Journals::find($id);
        // `title`, `description`, `link`, `field`, `institution`,
        //  `country`, `created_at`,
        // `updated_at`, `status`, `image`, `price`, `user_id`, `deleted_at`
        $journal->title = $request->input('title');
        $journal->description = $request->input('description');
        $journal->link = $request->input('link');
        $journal->field = $request->input('field');
        $journal->institution = $request->input('institution');
        $journal->country = $request->input('country');
        $journal->price = $request->input('price');
        $image = $request->file('image');
        $journal->user_id = auth()->user()->id;
        $data = $request->all();

        $rules = [
            'title' => 'required|unique:journal',
            'description' => 'required',
            'field' => 'required',
            'institution' => 'required',
            'country' => 'required',
            'price' => 'required|min:1',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ];
        $messages = [];
        $validator =
            Validator::make($data, $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            if ($request->hasFile('image')) {
                //get filename with extension
                $image_name_with_ext = request()->image->getClientOriginalName();
                $image_name_without_ext = pathinfo($image_name_with_ext, PATHINFO_FILENAME);
                $extension = $request->file('image')->getClientOriginalExtension();
                $filename_to_store = $image_name_without_ext . '_' . time() . '_' . $extension;
                $path = $request->file('image')->storeAs('public/journals', $filename_to_store);
            } else {
                $filename_to_store = 'noimage.jpg';
            }
            $journal->image  = $filename_to_store;
            $save_data = $journal->save();


            if ($save_data == true) {
                if ($path == true) {
                    return redirect()->back()->with(['success' => 'Journal Updated successfully.']);
                } else {
                    return redirect()->back()->with(['error' => 'Error Uploading file']);
                }
            } else {
                return redirect()->back()->with(['error' => 'Error saving data, Try Again later ']);
            }
        }
    }
    public function delete($id){
        // i actually do soft delete
        $journal = Journals::find($id);
        if($journal != null){
            $delete_data = $journal->destroy($id);
            if ($delete_data == true) {
                $data = [
                    'success' => 'Journal Deleted Successfully'
                ];
                return redirect('/journals/view');
            } else {
                $data = [
                    'error' => 'Could not delete, Try again later'
                ];
                return view('pages.journals')->with($data);
            }
        }else{
            return redirect('/journals/view');
        }

    }
}
