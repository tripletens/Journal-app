
    <div class="row justify-content-right">
        <div class="col-md-4 col-lg-12 card-box">
             <div class="card-box table-responsive">
                            <h4 class="m-t-0 header-title"><b>My Journals</b></h4>
                            <p class="text-muted font-13 m-b-30">
                                View all your Journals
                            </p>

                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                    {{-- `title`, `description`, `link`, `field`, `institution`,
                                     `country`,
                                    `status`, `image`, `price` --}}
                                <tr>
                                    <th> Journal Title</th>
                                    <th>Description</th>
                                    <th>Related Link</th>
                                    <th>Field</th>
                                    <th>Institution</th>
                                    <th>Country</th>
                                    <th>Price(NGN)</th>
                                    <th>Status</th>
                                    <th>View</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if (count($myjournals) > 0)
                                    @foreach ($myjournals as $key => $value)
                                        <tr>
                                            <td>{{ $value->title }}</td>
                                            <td>{{ $value->description }}</td>
                                            <td>
                                                <a href="{{ $value->link }}">
                                                    {{ $value->link }}
                                                </a>
                                            </td>
                                            <td>{{ $value->field }}</td>
                                            <td>{{ $value->institution }}</td>
                                            <td>{{ strtoupper($value->country) }}</td>
                                            <td>{{ $value->price }}</td>
                                            <td>
                                                <br>
                                                @if($value->status == true)
                                                    <div class="alert alert-success">
                                                        Approved
                                                    </div>
                                                @else
                                                    <div class="alert alert-info">
                                                        In Progress
                                                    </div>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('search_journal_by_id',$value->id) }}"
                                                    <button type="button" title="View Order" class="btn btn-default btn-custom btn-rounded waves-effect waves-light">
                                                        <i class="fa fa-tags"></i>
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <span class="text-danger"> You dont have any journals yet.
                                        Create
                                        <a href="{{ route('create-journal') }}">here </a></span>
                                @endif
                                </tbody>
                            </table>
                        </div>

        </div>
    </div>
