<div id="editmodal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog modal-lg" >
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h3 class="modal-title" id="custom-width-modalLabel"> Edit your Journals</h3>

                                                </div>
                                                <div class="modal-body">
                                                    <form role="form" method="POST" action="/journal/edit/{{ $journal->id }}" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="alert alert-danger text-left">
                                                            <h5>Please Don't forget to add Articles to your Journals </h5>
                                                        </div>
                                                        @include('const.messages')
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Title of Journal</label>
                                                            <input type="text" value="{{ $journal->title }}" class="form-control" name="title" id="exampleInputEmail1" placeholder="Enter Journal Title...">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1">Brief Description of Journal</label>
                                                            <textarea class="form-control" value="{{ $journal->description }}" name="description" placeholder="Add a brief Description"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1">Related Link</label>
                                                            <input type="url" class="form-control" value="{{ $journal->link }}" title="i.e https://www.mywebsite.com" name="link" id="exampleInputPassword1" placeholder="Enter a related link">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1">Field</label>
                                                            <select class="form-control" name="field" required>
                                                                <option value=""> -- Select a Journal -- </option>
                                                                <option value="science">Science</option>
                                                                <option value="arts">Arts</option>
                                                                <option value="business">Business</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1">Institution</label>
                                                            <input type="text" value="{{ $journal->institution }}" class="form-control" name="institution" id="exampleInputPassword1" placeholder="Enter Institution">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1">Country</label>
                                                            <select name="country" class="form-control">
                                                                <option value="">-- Select a Country --</option>
                                                                <option value="nigeria">Nigeria</option>
                                                                <option value="ghana">Ghana</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1">Price in Naira</label>
                                                            <input type="number" min="0" value="{{ $journal->price }}" class="form-control" name="price" id="exampleInputPassword1" placeholder="Enter price">
                                                        </div>
                                                        <div class="form-group m-b-0">
                                                            <label class="control-label">Image</label>
                                                            <input type="file" name="image" class="form-control" placeholder="Upload Journal Image"/>

                                                        </div>
                                                        <br>
                                                        <button type="button" class="btn btn-default btn-danger btn-rounded waves-effect waves-light" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-default btn-custom btn-rounded waves-effect pull-left" style="margin-right:2px;">Add Journal</button>
                                                    </form>
                                                    <br><br>

                                                </div>
                                                <div class="modal-footer">
                                                    <div class="alert alert-danger text-left">
                                                        <h5>Please Don't forget to add Articles to your Journals </h5>
                                                    </div>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
