@if (count($errors) > 0 )
    @foreach ( $errors->all() as $error)
        <div class="alert alert-danger btn btn-red white-text">
            {{ $error }}
        </div>
    @endforeach
@endif
@if ( session('success') )

        {{--  <a class="btn btn-success waves-effect waves-light" href="javascript:;"
        onclick="">Success</a>  --}}
        {{--  <div class="alert alert-success  btn btn-green white-text">  --}}
            {{--    --}}
            <script>
                Swal.fire({
                    position: 'top-end',
                    type: 'success',
                    title: "{{ session('success') }}",
                    showConfirmButton: false,
                    timer: 5000
                })
            </script>
        {{--  </div>  --}}
@endif
@if ( session('error') )
        {{--  <div class="alert alert-danger btn btn-red white-text">  --}}
           <script>
                Swal.fire({
                    position: 'top-end',
                    type: 'error',
                    title: "{{ session('error') }}",
                    showConfirmButton: false,
                    timer: 5000
                })
            </script>
        {{--  </div>  --}}
@endif
