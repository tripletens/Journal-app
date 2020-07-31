
    <div class="row justify-content-right">
        <div class="col-md-4 col-lg-12 card-box">
             <div class="card-box table-responsive">
                            <h4 class="m-t-0 header-title"><b>Authors</b></h4>
                            <p class="text-muted font-13 m-b-30">
                                View all available Authors
                            </p>

                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Highest Degree</th>
                                    <th>Email Address</th>
                                    <th>No of Journals</th>
                                    <th>Field</th>
                                    <th>Institution</th>
                                    <th>Country</th>
                                    <th>View Profile</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Kalu Chinonso</td>
                                    <td>Bachelors Degree</td>
                                    <td>Tripletens.kc@gmail.com</td>
                                    <td>23</td>
                                    <td>Science</td>
                                    <td>Nnamdi Azikiwe University, Awka</td>
                                    <td>Nigeria</td>
                                    <td>
                                        <a href="{{ route('authors-view-profile',1) }}"
                                            <button type="button" title="View Profile" class="btn btn-default btn-custom btn-rounded waves-effect waves-light">
                                                <i class="fa fa-user"></i>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

        </div>
    </div>
