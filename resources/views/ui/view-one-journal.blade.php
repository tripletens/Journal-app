
    <div class="row justify-content-right">
        <div class="col-md-4 col-lg-12 card-box">
            <h2 class="m-t-0  text-center"><b>Journals</b></h2>
                <p class="text-muted font-13 m-b-30 text-center">
                    View all available Journals
                </p>
            <hr>
                    <div class="row">
                        <div class="col-md-4 col-xs-12 col-sm-12">
                            <div class="img-responsive" style="padding:20px;">
                                <img src="<?php echo asset('storage/journals/'. $journal->image )?>" class="thumb-img" alt="work-thumbnail">
                            </div>
                        </div>
                        <div class="col-md-8 col-xs-12 col-sm-12">
                            @include('const.messages')
                            <h2 class="m-t-0 header-title  text-center"><b>{{ $journal->title }}</b></h2>
                            <p> {{ $journal->description }}
                            </p>
                            <a href="#">{{ $journal->link }} </a>
                            <br>
                            @if($journal->price != 0)
                            <div class="" style="margin-top:5%;">


                                <button type="button" class="btn btn-danger btn-custom btn-rounded waves-effect waves-light">
                                <i class="fa fa-shopping-basket"></i> Add to Cart</button>

                            </div>
                            @endif
                            @auth
                            @if (auth()->user()->id === $journal->user_id || auth()->user()->role == 'admin')
                                <div class="pull-right" style="margin-top:5%;">
                                    <button type="button" data-toggle="modal" data-target="#editmodal" class="btn btn-default btn-custom btn-rounded waves-effect waves-light">
                                    <i class="fa fa-edit"></i> edit</button>
                                    <button class="btn btn-danger btn-rounded waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-sm">
                                         <i class="fa fa-trash"></i> Delete</button>
                                    {{-- <button type="button" data-toggle="modal2" data-target="#deletemodal" class="btn btn-danger btn-custom btn-rounded waves-effect waves-light">
                                   </button> --}}
                                </div>
                            @endif
                            @endauth
                        </div>
                        {{-- edit Modal starts here  --}}
                            @include('ui.edit-journal')
                        {{-- edit Modal ends here  --}}
                        {{-- delete Modal starts here  --}}
                            @include('ui.delete-journal')
                        {{-- delete Modal ends here  --}}
                    </div>
                    <br>
                    <hr/>
                    <h2 class="m-t-0  text-center"><b>Articles</b></h2>

            <div class="">
                <ul type="solid">
                    @if (count($journal->articles) > 0)
                        @foreach($journal->articles as $key=>$value)
                            <li>
                                <div class="card">
                                    <h5>Title : {{ $value->title }}
                                        <span class="text-right col-sm-12 col-xs-12 col-md-12 col-lg-12">
                                            Pages ({{ $value->page_start }} - {{ $value->page_end }})
                                        </span>
                                    </h5>
                                    <p class="text-muted font-13 m-b-30 text-left ">
                                        {{ $value->body }}
                                        <br>
                                        <span class="text-left">
                                            Current Volume ({{ $value->current_volume }})
                                        </span>
                                        @if($purchase === true || auth()->user()->id == $journal->user_id )
                                             <a href="<?php echo asset('storage/articles/'. $value->file_name)?>" download>download here</a>
                                        @endif

                                    </p>
                                    @auth
                                    @if (auth()->user()->id === $journal->user_id || auth()->user()->role == 'admin')
                                        <div class="pull-right" style="margin-top:5%;">

                                            {{-- <button type="button" data-toggle="modal" data-target=".bs-example-modal-s" class="btn btn-danger btn-rounded waves-effect waves-light" >
                                            <i class="fa fa-trash"></i> Delete</button> --}}
                                            <form method="POST" action="{{ route('delete-articles',$value->id) }}">
                                                @csrf
                                                <button type="button" data-toggle="modal" data-target="#edit_article_modal" class="btn btn-xs btn-default btn-custom btn-rounded waves-effect waves-light">
                                                <i class="fa fa-edit"></i> edit</button>
                                                <button type="submit"title="Delete Article"class="btn btn-danger btn-rounded waves-effect waves-light" style="margin-right:2px;">
                                                    <i class="fa fa-trash"></i> Delete
                                                </button>
                                            </form>
                                        </div>
                                    @endif
                                    @endauth
                                </div>

                            </li>
                            {{-- edit article Modal starts here  --}}
                                    @include('ui.edit-article')
                                {{-- edit article Modal ends here  --}}
                                {{-- delete article Modal starts here  --}}
                                    {{-- @include('ui.delete-article') --}}
                                {{-- delete article Modal ends here  --}}
                        @endforeach
                    @else
                        @auth
                            @if (auth()->user()->id === $journal->user_id || auth()->user()->role == 'admin')
                            <div class="alert alert-danger">Please Add an Article to get approval
                                <a href="{{ route('create-article') }}">Add here</a>
                            </div>
                            @endif
                        @endauth
                        <div class="alert alert-info">
                                Sorry there is currently no article for this Journal
                        </div>
                    @endif
                </ul>
            </div>
        </div>

    </div>
