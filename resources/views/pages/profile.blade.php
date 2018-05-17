@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Profile</div>

                <div class="card-body">
                  <p>
                      Your age is
                      {{
                        Carbon\Carbon::createFromDate(1990,7,7)->age
                      }}
                  </p>
                    <p>{{ $married }}</p>
                    <p>{{ $test }}</p>
                    <p>{{ $age }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
