<div class="panel panel-default">
    <!-- <div class="panel-heading">
                                        <h4>Invoice</h4>
                                    </div> -->
    <div class="panel-body">
        <div class="clearfix">
            <div class="pull-left">
                <h4 class="text-right" style="font-weight:bolder;">
                    ACADEMIC JOURNAL ONLINE</h4>

            </div>
            <div class="pull-right">

                <?php $total = 0; $date = ''?>
                @foreach ($orders as $item)
                    <?php $total += $item['price'];
                        $date = $item->created_at;
                    ?>
                @endforeach
                <h4>Invoice # <br>
                    <strong>{{ $reference }}</strong>
                                                </h4>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">

                <div class="pull-left m-t-30">
                    <address>
                                                      <strong>Academic Journal Online</strong><br>
                                                      {{--  795 Folsom Ave, Suite 600<br>
                                                      San Francisco, CA 94107<br>
                                                      <abbr title="Phone">P:</abbr> (123) 456-7890
                                                      </address>  --}}
                </div>
                <div class="pull-right m-t-30">

                    <p><strong>Order Date: </strong> {{ $date }}</p>
                    <p class="m-t-10"><strong>Order Status: </strong> <span class="label label-success">Success</span></p>
                    <p class="m-t-10"><strong>Order ID: </strong> {{ $reference }}</p>
                </div>
            </div>
        </div>
        <div class="m-h-50"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table m-t-30">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Journal Name </th>
                                <th>Description </th>
                                <th>Link</th>

                                <th>Price (NGN)</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($orders) > 0)
                                @foreach ($orders as $key => $item)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td>{{ $item->link }}</td>
                                        <td>{{ $item->price }}</td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row" style="border-radius: 0px;">
            <div class="col-md-3 col-md-offset-9">
                <hr>
                <h3 class="text-right">NGN {{ $total }}</h3>
            </div>
        </div>
        <hr>
        <div class="hidden-print">
            <div class="pull-right">
                <a href="javascript:window.print()" title="Print Invoice" class="btn btn-inverse waves-effect waves-light"><i class="fa fa-print"></i></a>

            </div>
        </div>
    </div>
</div>
