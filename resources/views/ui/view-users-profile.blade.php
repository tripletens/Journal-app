
    <div class="row justify-content-right">
        <div class="col-md-4 col-lg-4">
            <div class="card-box">
                <img src="{{ asset('assets/images/gallery/1.jpg') }}" class="thumb-img" alt="work-thumbnail">
            </div>
        </div>
        <div class="col-md-8" >
            <div class="profile-detail card-box">
                                <div>
                                    <img src="<?php echo asset('storage/profile/'. $user->image )?>" class="img-circle" alt="profile-image">

                                    {{-- <ul class="list-inline status-list m-t-20">
                                        <li>
                                            <h3 class="text-primary m-b-5">456</h3>
                                            <p class="text-muted">Journals</p>
                                        </li>

                                        <li>
                                            <h3 class="text-success m-b-5">500</h3>
                                            <p class="text-muted">Bought Journals</p>
                                        </li>
                                    </ul> --}}

                                    {{-- <button type="button" class="btn btn-pink btn-custom btn-rounded waves-effect waves-light">Follow</button> --}}

                                    <hr>
                                    <h4 class="text-uppercase font-600">{{ $user->name }}</h4>
                                    {{-- <p class="text-muted font-13 m-b-30">
                                        Hi I'm Kalu Chinonso,has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.
                                    </p> --}}

                                    <div class="text-left">
                                        {{-- <p class="text-muted font-13"><strong>User Name :</strong> <span class="m-l-15">{{ $user->name }}</span></p> --}}

                                        <p class="text-muted font-13"><strong>Email :</strong> <span class="m-l-15">{{ $user->email }}</span></p>

                                        <p class="text-muted font-13"><strong>Field :</strong><span class="m-l-15">{{ strtoupper($user->field) }}</span></p>

                                        <p class="text-muted font-13"><strong>Institution :</strong> <span class="m-l-15">{{ strtoupper($user->institution) }}</span></p>

                                        <p class="text-muted font-13"><strong>Country :</strong> <span class="m-l-15">{{ strtoupper($user->country) }}</span></p>

                                    </div>


                                </div>

                            </div>
        </div>
    </div>
