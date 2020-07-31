<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Journals;
use App\Articles;
use Illuminate\Support\Facades\Validator;
class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user_id = auth()->user()->id;
        // NOTE ADMIN  CANNOT EDIT ANYBODY'S ARTICLES
        // HE ONLY APPROVES
        $myJournals = Journals::where('user_id',$user_id)->get();
        // echo var_dump($myJournals); exit();
        $data = [
            'myjournals' => $myJournals
        ];
        return view('pages.create_article')->with($data);
    }

    public function process_create_articles(Request $request){
        //  `title`, `author_id`, `page_start`, `page_end`,
        //   `body`, `journal_id`, `current_volume`,
        //   `verified`, `status`, `created_at`, `updated_at`, `file_name`
        $title = $request->input('title');
        $author_id = auth()->user()->id;
        $page_start = $request->input('page_start');
        $page_end = $request->input('page_end');
        $body = $request->input('body');
        $journal_id = $request->input('journal_id');
        $current_volume = $request->input('current_volume');
        // $upload = $request->file('upload');
        $data = $request->all();

        // echo var_dump($request->hasFile('upload')); exit();

        $rules = [
            'title' => 'required',
            'body' => 'required|max:100',
            'page_start' => 'required',
            'page_end' => 'required',
            'journal_id' => 'required',
            'current_volume' => 'required|min:1',
            'upload' => 'required|file|mimes:pdf,doc,docx|max:2048'
        ];
        $messages = [];
        // $extension = $request->file('upload')->getClientOriginalExtension();
        // echo $extension;
        // exit();
        $validator =
            Validator::make($data, $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            if ($request->hasFile('upload')) {
                //get filename with extension
                $upload_name_with_ext = request()->upload->getClientOriginalName();
                $upload_name_without_ext = pathinfo($upload_name_with_ext, PATHINFO_FILENAME);
                $extension = $request->file('upload')->getClientOriginalExtension();
                // echo $extension; exit();
                $filename_to_store = $upload_name_without_ext . '_' . time() . '_' . $extension;
                $path = $request->file('upload')->storeAs('public/articles', $filename_to_store);
            } else {
                $filename_to_store = 'nofile';
            }
            //  `title`, `author_id`, `page_start`, `page_end`,
        //   `body`, `journal_id`, `current_volume`,
        //   `verified`, `status`, `created_at`, `updated_at`, `file_name`
            $save_data = Articles::create([
                'title' => $title,
                'body' => $body,
                'page_start' => $page_start,
                'page_end' => $page_end,
                'current_volume' => $current_volume,

                'journal_id' => $journal_id,
                'author_id' => $author_id,
                'file_name' => $filename_to_store
            ]);
            // echo $journal_name; exit();

            if ($save_data == true) {
                if ($path == true) {
                    return redirect()->back()->with(['success' => 'Article saved successfully. Verification will start soonest.']);
                } else {
                    return redirect()->back()->with(['error' => 'Error Uploading file']);
                }
            } else {
                return redirect()->back()->with(['error' => 'Error saving data, Try Again later ']);
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
        // lemme update / edit the articles here
        $get_article = Articles::find($id);
        //  `title`, `author_id`, `page_start`, `page_end`,
        //   `body`, `journal_id`, `current_volume`,
        //   `verified`, `status`, `created_at`, `updated_at`, `file_name`
        $get_article->title = $request->input('title');
        $get_article->page_start = $request->input('page_start');
        $get_article->page_end = $request->input('page_end');
        $get_article->body = $request->input('body');
        $get_article->current_volume = $request->input('current_volume');

        $data = $request->all();

        // echo var_dump($request->hasFile('upload')); exit();

        $rules = [
            'title' => 'required|unique:articles',
            'body' => 'required',
            'page_start' => 'required',
            'page_end' => 'required',
            'current_volume' => 'required|min:1',
            'upload' => 'required|file|mimes:pdf,doc,docx|max:2048'
        ];
        $messages = [];
        // $extension = $request->file('upload')->getClientOriginalExtension();
        // echo $extension;
        // exit();
        $validator =
            Validator::make($data, $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            if ($request->hasFile('upload')) {
                //get filename with extension
                $upload_name_with_ext = request()->upload->getClientOriginalName();
                $upload_name_without_ext = pathinfo($upload_name_with_ext, PATHINFO_FILENAME);
                $extension = $request->file('upload')->getClientOriginalExtension();
                // echo $extension; exit();
                $filename_to_store = $upload_name_without_ext . '_' . time() . '_' . $extension;
                $path = $request->file('upload')->storeAs('public/articles', $filename_to_store);
            } else {
                $filename_to_store = 'nofile';
            }
            //  `title`, `author_id`, `page_start`, `page_end`,
            //   `body`, `journal_id`, `current_volume`,
            //   `verified`, `status`, `created_at`, `updated_at`, `file_name`
            $save_data = $get_article->save();


            if ($save_data == true) {
                if ($path == true) {
                    return redirect()->back()->with(['success' => 'Article Updated successfully. Verification will start soonest.']);
                } else {
                    return redirect()->back()->with(['error' => 'Error Uploading file']);
                }
            } else {
                return redirect()->back()->with(['error' => 'Error saving data, Try Again later ']);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // i actually do soft delete
        $article = Articles::find($id);
        if ($article != null) {
            $delete_data = $article->destroy($id);
            if ($delete_data == true) {
                $data = [
                    'success' => 'Article Deleted Successfully'
                ];
                return redirect('/journals/view');
            } else {
                $data = [
                    'error' => 'Could not delete, Try again later'
                ];
                return view('pages.journals')->with($data);
            }
        } else {
            return redirect('/journals/view');
        }
    }
}
