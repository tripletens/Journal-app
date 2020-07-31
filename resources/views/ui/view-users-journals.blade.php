
    <div class="row justify-content-right">
        <div class="col-md-4 col-lg-12 card-box">
            <h2 class="m-t-0  text-center"><b>Journals</b></h2>
                <p class="text-muted font-13 m-b-30 text-center">
                    View all available Journals
                </p>
            <hr>
            @include('const.messages')
            @if (count($journals) > 0 )
                @foreach ($journals  as $journal)
                    <div class="row">
                        <div class="col-md-4 col-xs-12 col-sm-12">
                            <div class="img-responsive" style="padding:20px;">

                                <img src="<?php echo asset('storage/journals/'. $journal->image )?>" class="thumb-img" alt="work-thumbnail">
                            </div>
                        </div>
                        <div class="col-md-8 col-xs-12 col-sm-12">
                            <h2 class="m-t-0 header-title  text-center"><b>{{ $journal->title }}</b></h2>
                            <br>
                            <p> {{ $journal->description }}
                            </p>
                            <a href="{{ $journal->link }}" target="_blank">{{ $journal->link }} </a>
                            <br>
                            <div class="" style="margin-top:5%;">
                                {{--  <button type="button" class="btn btn-default pull-left btn-custom btn-rounded waves-effect waves-light">
                                <i class="fa fa-credit-card-alt"></i> Buy</button>  --}}

                                @if($journal->price != 0)
                                    <form method="POST" action="{{ route('add-to-cart',$journal->id) }}">
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-custom btn-rounded waves-effect waves-light">
                                        <i class="fa fa-shopping-basket"></i> Add to Cart</button>
                                    </form>
                                @endif

                                <a href="/journals/{{ $journal->id }}">
                                    <button type="button" class=" pull-right btn btn-default btn-default btn-rounded waves-effect waves-light">
                                <i class="fa fa-book"></i> Read More</button></a>
                            </div>
                        </div>

                    </div>
                    <br>
                    <hr/>
                @endforeach
                <span class="pull-right">
                    {{ $journals->links() }}
                </span>

            @else
                <span class="alert alert-info">No Journal Available now</span>
            @endif

        </div>
    </div>
