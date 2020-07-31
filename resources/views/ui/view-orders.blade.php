
    <div class="row justify-content-right">
        <div class="col-md-4 col-lg-12 card-box">
             <div class="card-box table-responsive">
                            <h4 class="m-t-0 header-title"><b>Orders</b></h4>
                            <p class="text-muted font-13 m-b-30">
                                View all your Orders
                            </p>

                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Purchase Status</th>
                                    <th>Reference No</th>

                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(count($orders) > 0)
                                    @foreach ($orders as $key => $order)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>
                                                <a href="{{ route('search_journal_by_id',$order[0]->id ) }}" title="View Journal">{{  $order[0]->title }}</a>
                                            </td>
                                            <td>{{ $order[0]->description }}</td>
                                            <td>Completed</td>

                                            <td>
                                                {{ $ref[$key] }}
                                            </td>
                                            <td>
                                                <a href="{{ route('invoice',$ref[$key]) }}">
                                                    View Invoice
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else

                                @endif
                                </tbody>
                            </table>
                        </div>

        </div>
    </div>
