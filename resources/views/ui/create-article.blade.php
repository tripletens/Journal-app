
    <div class="row justify-content-right">
        <div class="col-md-12 col-lg-12 card-box">

            <h2 class="text-center"> Add your Articles </h2>

             {{-- `title`, `author_id`, `page_start`, `page_end`, `body`, `journal_id`,
             `current_volume`, `verified`, `status`, `created_at`,
             `updated_at`, `file_name`  --}}
            @if (count($myjournals) > 0 )
                <form method="POST" action="{{ route('process-create-articles') }}" enctype="multipart/form-data">
                    @include('const.messages')
                    @csrf
                    <div class="form-group">
                        <label for="title">Title of Article</label>
                        <input class="form-control" name="title" type="text" placeholder="Enter Title of Article">
                    </div>
                    <div class="form-group">
                        <label for="title">Article Description</label>
                        <Textarea class="form-control" name="body" type="text" placeholder="Enter Description of Article">
                        </Textarea>
                        <i class="text-danger">NB: Maximum character length is 100</i>
                    </div>
                    <div class="form-group">
                        <label for="title">Starting Page </label>
                        <input class="form-control" name="page_start" type="number" placeholder="Article starts at page ???">
                    </div>
                    <div class="form-group">
                        <label for="title">Ending Page </label>
                        <input class="form-control" name="page_end" type="number" placeholder="Article ends at page ???">
                    </div>
                    <div class="form-group">
                        <label for="title">Current Volume </label>
                        <input class="form-control" name="current_volume" type="number" placeholder="Current Volume of Article">
                    </div>
                    <div class="form-group">
                        <label for="title">Pick one of your Journal</label>
                        <select  name="journal_id" class="form-control">
                            <option name="journal_id[]" value="">Select a Journal</option>
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
                        Add Articles
                    </button>
                </form>
            @else
                <div class="alert alert-info">
                    Please Create A Journal First
                </div>
            @endif
        </div>
    </div>
