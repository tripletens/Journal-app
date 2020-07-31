<div class="col-md-3 col-lg-3 col-xs-12">
            <div class="card">
                <div class="card-body">
                    {{-- hidden-xs --}}
                    <form role="search" method='POST' action="{{ route('search-journals') }}" class="navbar-left app-search pull-left widget-bg-color-icon card-box fadeInDown animated">
                        @csrf
                        <div class="form-group row ">
                            <div class="col-md-8 col-lg-8 col-xs-9">
                                <input type="text" placeholder="Search Journals..." class="form-control" name="searchitem" required>
                            </div>
                            <div class="col-md-4 col-lg-4 col-xs-3">
                                <button type="search" class="btn btn-default btn-custom btn-rounded waves-effect waves-light">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                        <div class="radio radio-custom radio-circle">
                            <input id="radio71" type="radio" value="title" checked required name="variable">
                            <label for="radio71">
                                Title
                            </label>
                        </div>
                        <div class="radio radio-custom radio-circle">
                            <input id="radio71" type="radio"value="country" name="variable" >
                            <label for="radio71">
                                Country
                            </label>
                        </div>

                        <div class="radio radio-custom radio-circle">
                            <input id="radio71" type="radio" value="institution" name="variable">
                            <label for="radio71">
                                Institution
                            </label>
                        </div>

                        <div class="radio radio-custom radio-circle">
                            <input id="radio71" type="radio" value="field" name="variable">
                            <label for="radio71">
                                Field
                            </label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
