
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
                                    <th>Email</th>
                                    <th>Amount</th>
                                    <th>Payment Method</th>
                                    <th>Purchase Status</th>
                                    <th>Reference No</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(count($mytransactions) > 0)
                                    @foreach ($mytransactions as $key)
                                        <tr>
                                            <td>{{ $key->email }}</td>
                                            <td>
                                                {{ $key->amount }}
                                            </td>
                                            <td>{{ $key->payment_method }}</td>
                                            <td>Confirmed</td>

                                            <td>
                                                {{ $key->reference}}
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
