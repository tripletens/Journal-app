
    <div class="row justify-content-right">
        <div class="col-md-4 col-lg-12 card-box">
            <h2 class="m-t-0  text-center"><b>Journals</b></h2>
                <p class="text-muted font-13 m-b-30 text-center">
                    View Search Results
                </p>
            <hr>
            @if (count($journals) > 0 )
                @foreach ($journals  as $journal)
                    <div class="row">
                        <div class="col-md-4 col-xs-12 col-sm-12">
                            <div class="img-responsive" style="padding:20px;">
                                <img src="{{ asset('assets/images/gallery/1.jpg') }}" class="thumb-img" alt="work-thumbnail">
                            </div>
                        </div>
                        <div class="col-md-8 col-xs-12 col-sm-12">
                            <h2 class="m-t-0 header-title  text-center"><b>{{ $journal->title }}</b></h2>
                            <p> {{ $journal->description }}adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex
                                adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex
                            </p>
                            <a href="#">{{ $journal->link }} </a>
                            <br>

                                <div class="" style="margin-top:5%;">
                                    @if($journal->price > 0)
                                    <button type="button" class="btn btn-default btn-custom btn-rounded waves-effect waves-light">
                                    <i class="fa fa-credit-card-alt"></i> Buy</button>

                                    <button type="button" class="btn btn-danger btn-custom btn-rounded waves-effect waves-light">
                                    <i class="fa fa-shopping-basket"></i> Add to Cart</button>
                                    @endif
                                    <a href="{{ route('search_journal_by_id',$journal->id) }}"> <button type="button" class=" pull-right btn btn-default btn-default btn-rounded waves-effect waves-light">
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
