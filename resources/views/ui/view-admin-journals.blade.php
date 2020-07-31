
    <div class="row justify-content-right">
        <div class="col-md-4 col-lg-12">
            <div class="card-box table-responsive">
                            <h4 class="m-t-0 header-title"><b>Journals</b></h4>
                            <p class="text-muted font-13 m-b-30">
                                View All Journals
                            </p>
           <table id="datatable-buttons" class="table table-striped table-bordered">

                                <thead>

                                <tr>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Link</th>
                                    <th>Price</th>
                                    <th>Field</th>
                                    <th>Institution</th>
                                    <th>Country</th>
                                    <th>Creator</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </thead>


                                <tbody>
                                @if(count($admin_journals) > 0)
                                    @foreach ($admin_journals as $item)
                                        <tr>
                                            <td>{{ $item->title }}</td>
                                            <td>{{ $item->Description }}</td>
                                            <td>{{ $item->link }}</td>
                                            <td>{{ $item->price }}</td>
                                            <td>{{ $item->field }}</td>
                                            <td>{{ $item->institution }}</td>
                                            <td>{{ $item->country }}</td>
                                            <td>
                                                @if($item->user_id == auth()->user()->id && auth()->user()->role == 'role')
                                                    <br><br>
                                                    <span class="alert alert-success" style="padding:4px;"> Admin </span>
                                                @else
                                                    <br>
                                                    <span class="alert alert-info" style="padding:4px;margin-top:-20px;">
                                                        <a href="{{ route('view-profile', $item->user_id) }}">
                                                            User
                                                        </a>
                                                    </span>
                                                @endif
                                            </td>
                                            <td>
                                                @if($item->status == true)
                                                    <br>
                                                    <span class="alert alert-success" style="padding:4px;"> Approved</span>
                                                    <br>
                                                @else
                                                    <br>
                                                    <span class="alert alert-danger" style="padding:4px;"> Not Approved</span>
                                                    <br>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('search_journal_by_id', $item->id) }}"> View Journal </a>
                                            </td>
                                            <td>
                                                @if($item->status == false)
                                                    <form method="POST" action="{{ route('approve-journal',$item->id) }}">
                                                        @csrf
                                                        <button type="submit" class="btn btn-sm btn-default btn-custom btn-rounded waves-effect waves-light">
                                                            Approve Journal
                                                        </button>
                                                    </form>
                                                @else
                                                    <form method="POST" action="{{ route('reject-journal',$item->id) }}">
                                                        @csrf
                                                        <button type="submit" class="btn btn-sm btn-danger btn-custom btn-rounded waves-effect waves-light">
                                                            Reject Journal
                                                        </button>
                                                    </form>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
            </div>
        </div>
    </div>
