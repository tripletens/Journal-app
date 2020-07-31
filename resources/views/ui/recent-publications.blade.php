
            @if(count($recent['recent']) < 1)

            @else
                <h2 class="text-center text-custom" style="padding:20px;" > Recent Publications</h2>
                <div class="row" style="padding-bottom:20px;">
                    <div class="owl-carousel owl-theme" id="owl-multi">
                        @if (count($recent['recent']) > 0)
                            @foreach ($recent as $key => $value)
                                @foreach ($value as $item)
                                    <div class="item">
                                    <a href="/journals/{{ $item->id }}">
                                        <div class="thumbnail">
                                        <img src="<?php echo asset('storage/journals/' . $item->image ); ?>" class="img-responsive">
                                            <div class="caption">
                                                <h5>{{  $item->title }}</h5>
                                                @guest
                                                    @if($item->price != 0)
                                                        <form method="POST" action="{{ route('add-to-cart',$item->id) }}">
                                                            @csrf
                                                            <button type="submit" class="btn btn-danger btn-custom btn-rounded waves-effect waves-light">
                                                            <i class="fa fa-shopping-basket"></i> Add to Cart</button>
                                                        </form>
                                                    @endif
                                                @endguest
                                                @auth
                                                    @if (auth()->user()->role == 'user')
                                                        @if($item->price != 0)
                                                            <form method="POST" action="{{ route('add-to-cart',$item->id) }}">
                                                                @csrf
                                                                <button type="submit" class="btn btn-danger btn-custom btn-rounded waves-effect waves-light">
                                                                <i class="fa fa-shopping-basket"></i> Add to Cart</button>
                                                            </form>
                                                        @endif
                                                    @endif
                                                @endauth
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                @endforeach
                            @endforeach
                        @endif
                    </div>
                </div>
            @endif

            {{--  <h2 class="text-center text-custom">Popular Authors</h2>
             <div class="row">
                <div class="col-md-4 col-lg-4">
                    <div class="thumbnail">
                        <img src="assets/images/nonso.jpg" class="thumb-img" alt="author picture" class="img-responsive">
                        <div class="caption">
                            <h3>Name of Author</h3>
                            <h4><span class="label label-danger">45</span> Published Journals</h4>
                            <h4>Nnamdi Azikiwe University, Awka</h4>
                            <h4>Anambra State, Nigeria </h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="thumbnail">
                        <img src="assets/images/nonso.jpg" class="thumb-img" alt="author picture" class="img-responsive">
                        <div class="caption">
                            <h3>Name of Author</h3>
                            <h4><span class="label label-danger">45</span> Published Journals</h4>
                            <h4>Nnamdi Azikiwe University, Awka</h4>
                            <h4>Anambra State, Nigeria </h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="thumbnail">
                        <img src="assets/images/nonso.jpg" class="thumb-img" alt="author picture" class="img-responsive">
                        <div class="caption">
                            <h3>Name of Author</h3>
                            <h4><span class="label label-danger">45</span> Published Journals</h4>
                            <h4>Nnamdi Azikiwe University, Awka</h4>
                            <h4>Anambra State, Nigeria </h4>
                        </div>
                    </div>
                </div>
            </div>  --}}
