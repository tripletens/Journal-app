<div id="edit_article_modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog modal-lg" >
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h3 class="modal-title" id="custom-width-modalLabel"> Edit your Articles</h3>

                                                </div>
                                                <div class="modal-body">
                                                    <form method="POST" action="{{ route('edit-articles',$value->id) }}" enctype="multipart/form-data">
                                                        @include('const.messages')
                                                        @csrf
                                                        <input type="hidden" value="{{ $value->author_id}}" name="user_id"/>
                                                        <div class="form-group">
                                                            <label for="title">Title of Article</label>
                                                            <input class="form-control" name="title" value="{{ $value->title }}" type="text" placeholder="Enter Title of Article">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="title">Article Description</label>
                                                            <Textarea class="form-control" name="body"  value="{{ $value->body }}" type="text" placeholder="Enter Description of Article">
                                                            </Textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="title">Starting Page </label>
                                                            <input class="form-control" name="page_start" value="{{ $value->page_start }}" type="number" placeholder="Article starts at page ???">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="title">Ending Page </label>
                                                            <input class="form-control" name="page_end" type="number" value="{{ $value->page_end }}"  placeholder="Article ends at page ???">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="title">Current Volume </label>
                                                            <input class="form-control" name="current_volume" type="number" value="{{ $value->current_volume }}" placeholder="Current Volume of Article">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="title">Pick one of your Journal</label>
                                                            <select  name="journal_id" class="form-control">
                                                                <option name="journal_id[]" value="">Select a Journal</option>
                                                                {{-- {{ var_dump($myjournals) }} --}}
                                                                @foreach ($myjournals as $key)
                                                                    <option name="journal_id[]" value="{{ $key['id']}}">{{ $key['title'] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="upload">Upload Article </label>
                                                            <input type="file" class="form-control" name="upload"  placeholder="Select a file">
                                                        </div>
                                                        <button type="submit" class="btn btn-default btn-custom btn-rounded waves-effect waves-light">
                                                            Save Articles
                                                        </button>
                                                    </form>
                                                    <div class="modal-footer">

                                                    </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
