<div class="row  text-custom">
    <div class="col-md-4 col-lg-4 col-xs-12" style="padding:10px;margin:auto;">
        <div class="card card-box">
            <div class="card-body">

                <ul type="none" class="text-left">
                    <h2 class="text-custom"> Office Info </h2>
                    <li><span class="fa fa-map-marker"></span> 208, journal road, Nigeria. </li><br>
                    <li><span class="fa fa-envelope"></span> hello@gmail.com </li><br>
                    <li><span class="fa fa-phone"></span>  +2323 - 6464783 </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-lg-4 col-xs-12" style="padding:10px;margin:auto;">
        <div class="card card-box">
            <div class="card-body">
                <h2 class="text-custom text-center"> Contact Us </h2>
               <form role="form" method="POST" action="{{ route('contact-us') }}">
                    @csrf
                    @include('const.messages')

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Enter email">

                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Full Name</label>
                                            <input type="text" class="form-control" name="fullname" id="exampleInputPassword1" placeholder="Full Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Message</label>
                                            <textarea class="form-control" name="message"></textarea>
                                        </div>
                                       <button type="submit" class="btn btn-default btn-custom btn-rounded waves-effect waves-light">Send</button>
                                    </form>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-lg-4 col-xs-12" style="padding:10px;margin:auto;">
        <div class="card card-box">
            <div class="card-body">
                {{-- <h2 class="text-custom"> Socials </h2> --}}
                <ul class="social-links list-inline m-0">
                                    <li>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="LinkedIn"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                    <li>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Instagram"><i class="fa fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Message"><i class="fa fa-envelope-o"></i></a>
                                    </li>
                                </ul>
            </div>
        </div>
    </div>
</div>
