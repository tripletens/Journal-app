
    <div class="row justify-content-right">
        <div class="col-md-4 col-lg-4">
            <div class="card-box">
                <img src="{{ asset('assets/images/gallery/1.jpg') }}" class="thumb-img" alt="work-thumbnail">
            </div>
        </div>
        <div class="col-md-8 card-box" >
            <h1>Update Profile</h1>
            <form role="form" method="POST" action="{{ route('process-update-profile') }}"  enctype="multipart/form-data">
                @csrf
                @include('const.messages')
                <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" disabled class="form-control" id="exampleInputEmail1" value="{{ $user->email }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Username</label>
                                            <input type="text" class="form-control" id="exampleInputusername" name="name" value="{{ $user->name }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Field</label>
                                            <select name="field" class="form-control">
                                                <option name="field[]" value="" >Select a Field of Study</option>
                                                <option name="field[]" value="arts" >Arts</option>
                                                <option name="field[]" value="science" >Science</option>
                                                <option name="field[]" value="business" >Business</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Institution</label>
                                            <input type="text" class="form-control" id="exampleInputusername" name="institution" value="{{ $user->institution }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Country</label>
                                            <input type="text" class="form-control" id="exampleInputusername" name="country" value="{{ $user->country }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Old Password</label>
                                            <input type="password" class="form-control" name="old_password" id="exampleInputPassword1" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">New Password</label>
                                            <input type="password" class="form-control" name="new_password" id="exampleInputPassword1" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Confirm New Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" name="confirm_new_password" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Profile Picture</label>
                                            <input type="file" class="form-control" name="image" id="exampleInputPassword1">
                                        </div>
                                        <button type="submit" class="btn btn-default btn-custom btn-rounded waves-effect waves-light">
                                            Update Profile
                                        </button>
                                    </form>
        </div>
    </div>
