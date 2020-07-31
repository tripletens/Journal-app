<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $id = null)
    {
        //
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $data = [
            'user' => $user
        ];
        return view('pages.users-profile')->with($data);
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
    public function update(Request $request)
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $data = [
            'user'=> $user
        ];
        return view('pages.update-profile')->with($data);
    }
    public function process_update(Request $request)
    {
        //username, email, password, new_password, old_password,image

        $username = $request->input('name');
        $old_password= $request->input('old_password');
        $new_password = $request->input('new_password');
        $confirm_new_password = $request->input('confirm_new_password');
        $field = $request->input('field');
        $institution = $request->input('institution');
        $country = $request->input('country');

        $image = $request->file('image');
        $user_id = auth()->user()->id;

        $data = $request->all();

        // echo $user_id; exit();

        $rules = [
            'name' => 'required|unique:users',
            'old_password' => 'required',
            'field' => 'required',
            'institution' => 'required',
            'country' => 'required',
            'new_password' => 'required',
            'confirm_new_password' => 'required|same:new_password',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ];
        $messages = [];
        $validator =
            Validator::make($data, $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $user = User::find($user_id);
            $user_password = $user->password;
            if (Hash::check($old_password, $user_password)) {

                if ($new_password == $confirm_new_password) {
                    $user->name = $username;
                    $user->password = Hash::make($new_password);
                    //upload image
                    if ($request->hasFile('image')) {
                        //get filename with extension
                        $image_name_with_ext = request()->image->getClientOriginalName();
                        $image_name_without_ext = pathinfo($image_name_with_ext, PATHINFO_FILENAME);
                        $extension = $request->file('image')->getClientOriginalExtension();
                        $filename_to_store = $image_name_without_ext . '_' . time() . '_' . $extension;
                        $path = $request->file('image')->storeAs('public/profile', $filename_to_store);
                    } else {
                        $filename_to_store = 'avatar.png';
                    }
                    $user->image = $filename_to_store;
                    $user->institution = $institution;
                    $user->country = $country;
                    $user->field = $field;
                    $save = $user->save();
                    if ($save == true) {
                        if ($path == true) {
                            return redirect()->back()->with(['success' => 'Profile Updated Successfully.']);
                        } else {
                            return redirect()->back()->with(['error' => 'Error Uploading file']);
                        }
                    } else {
                        return redirect()->back()->with(['error' => 'Error saving data, Try Again later ']);
                    }
                } else {
                    return redirect()->back()->with(['error' => 'Passwords does not Match ']);
                }
            } else {
                return redirect()->back()->with(['error' => 'Wrong Old Password']);
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
        //
    }
}
