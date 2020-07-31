
    <div class="row justify-content-right">
        <div class="col-md-4 col-lg-4">
            <div class="card-box">
                <img src="{{ asset('assets/images/journal1.jpg') }}" class="thumb-img" alt="work-thumbnail">
            </div>
        </div>
        <div class="col-md-8" >
            <div class=" card-box">
                <div class="panel-heading">
                    <h3 class="text-center"> Sign In to <strong class="text-custom">Journal</strong> </h3>
                </div>
                <div class="panel-body">
                    @if ( session('error') )
                            <div class="alert alert-danger btn btn-red white-text">
                                {{ session('error') }}
                            </div>
                    @endif

                    <form class="form-horizontal m-t-20" method="POST" action="{{ route('admin-process-login') }}">
                        @csrf
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input id="email" type="email" Placeholder="Email Address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="col-xs-12">
                                <div class="checkbox checkbox-custom checkbox-circle">
                                    <input id="checkbox1" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label for="checkbox1">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group text-center m-t-40 ">
                            <div class="col-xs-12" >
                                <button type="submit" class="btn btn-default btn-custom btn-rounded waves-effect waves-light pull-left">Log In</button>
                            </div>

                            <div class="col-sm-12">
                                @if (Route::has('password.request'))
                                    <a class="text-dark" href="{{ route('password.request') }}">
                                        <i class="fa fa-lock m-r-5"></i> {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                    <div class="row">
            	        <div class="col-sm-12 text-center">
            		        <p>Dont have an account? <a href="{{ route('register') }}" class="text-custom m-l-5"><b>Sign Up</b></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
