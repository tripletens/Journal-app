
    <div class="row justify-content-right">
        <div class="col-md-4 col-lg-12">
            <div class="card-box table-responsive">
                            <h4 class="m-t-0 header-title"><b>Journals</b></h4>
                            <p class="text-muted font-13 m-b-30">
                                View All Journals
                            </p>
           <table id="datatable-buttons" class="table table-striped table-bordered">
            {{-- `id`, `name`, `email`, `email_verified_at`, `password`,
            `remember_token`, `created_at`,
             `updated_at`, `role`, `status`, `image`, `field`,
              `institution`, `country` --}}
                                <thead>

                                <tr>
                                    <th>Full Name </th>
                                    <th>Email</th>
                                    <th>Role </th>

                                    <th>Field</th>
                                    <th>Institution</th>
                                    <th>Country</th>


                                    <th></th>
                                </tr>
                                </thead>


                                <tbody>

                                @if(count($users) > 0)
                                    @foreach ($users as $item)
                                        <tr>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->role }}</td>

                                            <td>{{ $item->field }}</td>
                                            <td>{{ $item->institution }}</td>
                                            <td>{{ $item->country }}</td>

                                            <td>
                                                @if($item->status == true)
                                                    <br>
                                                    <span class="alert alert-success"> Active</span>
                                                @else
                                                    <br>
                                                    <span class="alert alert-danger"> InActive </span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('view-profile', $item->id) }}"> View User </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
            </div>
        </div>
    </div>
