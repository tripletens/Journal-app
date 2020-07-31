
    <div class="row justify-content-right">
        <div class="col-md-4 col-lg-4">
            <div class="card-box">
                <img src="{{ asset('assets/images/gallery/1.jpg') }}" class="thumb-img" alt="work-thumbnail">
            </div>
        </div>
        <div class="col-md-8" >
            <div class=" card-box">
				<div class="panel-heading">
					<h3 class="text-center"> Reset Password </h3>
				</div>

				<div class="panel-body ">
					<form method="POST" action="{{ route('password.email') }}" role="form" class="text-center">
                        @csrf
                        <div class="alert alert-success alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">
								×
							</button>
							Enter your <b>Email</b> and instructions will be sent to you!
						</div>
						<div class="form-group m-b-0">
							<div class="input-group">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-default btn-custom btn-rounded waves-effect waves-light pull-left">Reset</button>

								</span>
							</div>
						</div>
					</form>
				</div>
			</div>
        </div>
    </div>
