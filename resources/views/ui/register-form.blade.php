
    <div class="row justify-content-right">
        <div class="col-md-4 col-lg-4">
            <div class="card-box">
                <img src="assets/images/gallery/1.jpg" class="thumb-img" alt="work-thumbnail">
            </div>
        </div>
        <div class="col-md-8" >
            <div class=" card-box">
				<div class="panel-heading">
					<h3 class="text-center"> Sign Up to <strong class="text-custom">Journal</strong> </h3>
				</div>

				<div class="panel-body">
					<form class="form-horizontal m-t-20" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group ">
							<div class="col-xs-12">
                                <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
						</div>

						<div class="form-group ">
							<div class="col-xs-12">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Username" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
						</div>

						<div class="form-group">
							<div class="col-xs-12">
                                <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                            </div>
                        </div>

						<div class="form-group text-center m-t-40">
							 <div class="col-xs-12" >
                                <button type="submit" class="btn btn-default btn-custom btn-rounded waves-effect waves-light pull-left">Register</button>
                            </div>
						</div>

					</form>

				</div>
			</div>
        </div>
    </div>
