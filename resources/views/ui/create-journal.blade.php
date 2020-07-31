
    <div class="row justify-content-right">
        <div class="col-md-12 col-lg-12 card-box">

            {{-- <h2 class="text-center">  </h2> --}}

            <div class="container-fluid" style="padding:50px;padding-top:-20px;">
                <div class="panel panel-border panel-danger text-danger">
					<div class="panel-heading">
		    			<h3 class="panel-title">Notification</h3>
					</div>
					<div class="panel-body">
                        <ul>
                            <li>
                                <p>
                                    All Journals will be reviewed before it will be approved and then published
                                </p>
                            </li>
                            <li>
                                <p>
                                    All Articles relating to your journals will be reviewed before it will be approved and then published
                                </p>
                            </li>
                            <li>
                                <p>
                                    Please don't forget to add Articles relating to the Journal
                                </p>
                            </li>
                            <li>
                                <p>
                                    Go to the "my Journals" menu to check if your Journals/Articles  have been approved
                                </p>
                            </li>
                            <li>
                                <p>
                                    Journals without Articles will not be APPROVED
                                </p>
                            </li>
                        </ul>
					</div>
                </div>
                <form role="form" method="POST" action="{{ route('process-create-journal') }}" enctype="multipart/form-data">
                    @csrf
                    <h3>Add your Journals</h3>
                    @include('const.messages')
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title of Journal</label>
                        <input type="text" class="form-control" name="title" id="exampleInputEmail1" placeholder="Enter Journal Title...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Brief Description of Journal</label>
                        <textarea class="form-control" name="description" placeholder="Add a brief Description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Related Link</label>
                        <input type="url" class="form-control" title="i.e https://www.mywebsite.com" name="link" id="exampleInputPassword1" placeholder="Enter a related link">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Field</label>
                        <select class="form-control" name="field" required>
                            <option value=""> -- Select a Journal -- </option>
                            <option value="science">Science</option>
                            <option value="social sciences">Social Sciences</option>
                            <option value="education">Education</option>
                            <option value="arts">Arts</option>
                            <option value="business">Business</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Institution</label>
                        <input type="text" class="form-control" name="institution" id="exampleInputPassword1" placeholder="Enter Institution">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Country</label>
                        <select name="country" class="form-control">
                            <option value="">-- Select a Country --</option>
                            <option value="nigeria">Nigeria</option>
                            <option value="ghana">Ghana</option>
                            <option value="ethopia">Ethopia</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Price in Naira</label>
                        <input type="number" min="0" class="form-control" name="price" id="exampleInputPassword1" placeholder="Enter price">
                        <i class="text-danger">NB: Please write 0 for free journals</i>
                    </div>
                    <div class="form-group m-b-0">
                        <label class="control-label">Image</label>
                        <input type="file" name="image" class="form-control" placeholder="Upload Journal Image"/>

                    </div>
                    <br>
                    <button type="submit" id="createbtn" class="btn btn-default btn-custom btn-rounded waves-effect waves-light">Add Journal</button>
                    <span id="loader" style="display:none;margin-left:5px;" class="pull-right">
                        <img src="{{ asset('storage/loader/loader2.gif') }}" style="width:25px;"/>
                    </span>
                </form>
                <br><br>
                <div class="alert alert-danger">
                    <h5>Please Don't forget to add Articles to your Journals </h5>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        var btn = document.getElementById('createbtn');
        var loader = document.getElementById('loader');
        btn.onsubmit(function(){
            loader.css('display','block');
        });
    </script>
