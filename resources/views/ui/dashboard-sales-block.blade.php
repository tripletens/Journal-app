<div class="row">
         <div class="col-md-6 col-lg-3">
            <a href="{{ route('journal-view') }}">
                        <div class="widget-bg-color-icon card-box fadeInDown animated">
                            <div class="bg-icon bg-icon-info pull-left">
                                <i class="md md-book text-info"></i>
                            </div>
                            <div class="text-right">
                                <h3 class="text-dark"><b class="counter">{{ $journals }}</b></h3>
                                <p class="text-muted">Total Journals</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
            </a>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        @if (auth()->user()->role == 'user')
                        <a href="{{ route('my-journal') }}">
                        <div class="widget-bg-color-icon card-box">
                            <div class="bg-icon bg-icon-purple pull-left">
                                <i class="md md-equalizer text-purple"></i>
                            </div>
                            <div class="text-right">
                                <h3 class="text-dark">
                                    <b class="counter">{{ count($myjournals) }}
                                    </b>
                                </h3>
                                <p class="text-muted">My Journals</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        </a>
                        @else
                            <a href="{{ route('journal-view') }}">
                                <div class="widget-bg-color-icon card-box">
                                    <div class="bg-icon bg-icon-purple pull-left">
                                        <i class="md md-equalizer text-purple"></i>
                                    </div>
                                    <div class="text-right">
                                        <h3 class="text-dark">
                                            <b class="counter">{{ $journals }}
                                            </b>
                                        </h3>
                                        <p class="text-muted">My Journals</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        @endif
                    </div>
                    <div class="col-md-6 col-lg-3">
                        @if (auth()->user()->role == 'user')
                            <a href="{{ route('my-transactions') }}">
                                <div class="widget-bg-color-icon card-box">
                                    <div class="bg-icon bg-icon-pink pull-left">
                                        <i class="md md-attach-money text-pink"></i>
                                    </div>
                                    <div class="text-right">
                                        <h3 class="text-dark"><b class="counter">{{ count($transactions) }}</b></h3>
                                        <p class="text-muted">My Transactions</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        @else
                            <a href="{{ route('all-transactions') }}">
                                <div class="widget-bg-color-icon card-box">
                                    <div class="bg-icon bg-icon-pink pull-left">
                                        <i class="md md-attach-money text-pink"></i>
                                    </div>
                                    <div class="text-right">
                                        <h3 class="text-dark"><b class="counter">{{ count($transactions) }}</b></h3>
                                        <p class="text-muted">All Transactions</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        @endif

                    </div>



                    <div class="col-md-6 col-lg-3">
                        @if (auth()->user()->role == 'user')
                        <a href="{{ route('my-orders') }}">
                        <div class="widget-bg-color-icon card-box">
                            <div class="bg-icon bg-icon-success pull-left">
                                <i class="md md-remove-red-eye text-success"></i>
                            </div>
                            <div class="text-right">
                                <h3 class="text-dark"><b class="counter">{{ count($orders) }}</b></h3>
                                <p class="text-muted">Past Orders</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        </a>
                        @else
                        <a href="{{ route('my-orders') }}">
                        <div class="widget-bg-color-icon card-box">
                            <div class="bg-icon bg-icon-success pull-left">
                                <i class="md md-remove-red-eye text-success"></i>
                            </div>
                            <div class="text-right">
                                <h3 class="text-dark"><b class="counter">{{ count($orders) }}</b></h3>
                                <p class="text-muted">Past Orders</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        </a>
                        @endif
                    </div>
                </div>
