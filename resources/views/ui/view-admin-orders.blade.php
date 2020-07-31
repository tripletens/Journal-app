
    <div class="row justify-content-right">
        <div class="col-md-4 col-lg-12">
            <div class="card-box table-responsive">
                            <h4 class="m-t-0 header-title"><b>Orders</b></h4>
                            <p class="text-muted font-13 m-b-30">
                                View All Orders
                            </p>
           <table id="datatable-buttons" class="table table-striped table-bordered">
                                <thead>

                                <tr>
                                    <th>User </th>
                                    <th>Journal</th>
                                    <th>Reference</th>
                                    <th>Status</th>
                                    <th>Date</th>

                                </tr>
                                </thead>


                                <tbody>
                                @if (count($orders) > 0 )
                                    @foreach ($orders as $item )
                                        <tr>
                                            <td>
                                                <a href="{{ route('view-profile', $item->user_id) }}"> View User </a>
                                            </td>
                                            <td>
                                                <a href="{{ route('search_journal_by_id', $item->journal_id) }}">View Journal</a>
                                            </td>
                                            <td>
                                                <a href="{{ route('invoice',$item->reference) }}">
                                                     {{ $item->reference }}
                                                </a>
                                            </td>
                                            <td>
                                                @if ($item->status == 1)
                                                    <div class="alert alert-success">Confirmed</div>
                                                @else
                                                    <div class="alert alert-info">In Progress</div>
                                                @endif
                                            </td>
                                            <td>{{ $item->created_at }}</td>

                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
            </div>
        </div>
    </div>
