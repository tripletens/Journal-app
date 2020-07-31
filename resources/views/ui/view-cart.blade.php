
    <div class="row justify-content-right">
        <div class="col-md-4 col-lg-12">
            <div class="card-box ">
                <h4 class="m-t-0 header-title"><b>Journals in your Cart</b></h4>
                <p class="text-muted font-13 m-b-30">
                    Cart items
                </p>
                <?php $total = 0 ;?>
                    @if (session('cart'))
                        @foreach (session('cart') as $item)
                           <?php $total += $item['price']; ?>
                        @endforeach

                    @endif
                    <div class="">
                        <p> Total: <span class="text-info">NGN {{ $total }}</span></p>
                    </div>

                <div>
                    @if (session('cart'))
                        @foreach (session('cart') as $item  )
                            <div class="row">
                                <span class="badge"></span>
                            <div class="col-md-4 col-xs-12 col-sm-12">
                                <div class="img-responsive" style="padding:20px;">

                                    <img src="<?php echo asset('storage/journals/'. $item['image'] )?>" class="thumb-img" alt="work-thumbnail">
                                </div>
                            </div>
                            <div class="col-md-8 col-xs-12 col-sm-12">
                                <h2 class="m-t-0 header-title  text-center"><b>{{ $item['title'] }}</b></h2>
                                <p> {{ $item['description'] }}adipisicing elit, sed do eiusmod tempor incitemitemunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex
                                    adipisicing elit, sed do eiusmod tempor incitemidunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                    laboris nisi ut aliquip ex
                                </p>
                                <a href="{{ $item['link'] }}" target="_blank">{{ $item['link']}} </a>
                                <br>
                                <div class="" style="margin-top:5%;">
                                    <a href="/journals/{{ $item['id'] }}">
                                        <button type="button" class=" pull-left btn btn-default btn-default btn-rounded waves-effect waves-light">
                                    <i class="fa fa-book"></i> Read More</button></a>
                                    <form method="DELETE" action="{{ route('remove-from-cart',$item['id']) }}">
                                        @csrf
                                        <button type="submit"  class="btn btn-danger btn-custom btn-rounded waves-effect waves-light">
                                        <i class="fa fa-trash"></i> Remove</button>
                                    </form>

                                    {{-- <a href="/journals/{{ $id }}">
                                        <button type="button" class=" pull-right btn btn-default btn-default btn-rounded waves-effect waves-light">
                                    <i class="fa fa-book"></i> Read More</button></a> --}}
                                    <br>
                                    {{-- <strong style="font-size:30px;font-weight:bolder;"> Total NGN{{ $total }}</strong> --}}
                                </div>
                            </div>

                        @endforeach
                        {{--  --}}
                         <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
                        <script src="https://js.paystack.co/v1/inline.js"></script>

                        <button type="button" onclick="payWithPaystack()" class=" btn btn-sm ladda-button btn-default pull-right btn-custom btn-rounded waves-effect waves-light" data-style="zoom-out">
                            <span id="loader" style="display:none;margin-left:5px;" class="pull-right">
                                <img src="{{ asset('storage/loader/loader2.gif') }}" style="width:25px;"/>
                            </span>
                            <span class="ladda-label">
                                        <i class="fa fa-credit-card-alt" ></i> Checkout
                                    </span><span class="ladda-spinner"></span>

                        </button>
                    @else
                        <br><br>
                        <span class="alert alert-danger">No Item in Cart</span>
                    @endif
                    <ul>
                        <li></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script>

        {{-- paystack payment here  --}}



                              function payWithPaystack(){
                                var handler = PaystackPop.setup({
                                  key: 'pk_test_8ac2a629cadfc6314ab7849a397a8b6f3fed2a14',
                                  email: '{{ auth()->user()->email}}',
                                  amount: '{{$total}}' * 100,
                                  currency: "NGN",

                                  ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
                                  metadata: {
                                     custom_fields: [
                                        {
                                            display_name: "{{ auth()->user()->name }}"

                                        }
                                     ]
                                  },
                                  callback: function(response){
                                        //ajax call here
                                    $('#loader').css('display','block');
                                $.ajax({
                                    url: "{{ route('checkout') }}",
                                    _token : "{{ csrf_token() }}",
                                    contentType: "application/json",
                                    data : {
                                        amount: '{{$total}}',
                                        reference : response.reference
                                    },
                                    success: function(result){
                                        {{--  console.log(result);  --}}
                                        window.location.href = "/invoice/" + result.order_reference;
                                      {{--  alert('success. transaction ref is ' + result.order_reference);
                                            },  --}}
                                    },
                                    error: function (result){
                                        alert(result);
                                    }
                                });


                                  },
                                  onClose: function(){
                                      alert('window closed');
                                  }
                                });
                                handler.openIframe();
                              }
                            </script>
    </script>
