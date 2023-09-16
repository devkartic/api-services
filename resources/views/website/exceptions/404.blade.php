@extends('website.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 pt-lg-5">
                <div class="card text-center bg-none my-5">
                    <div class="card-body py-5">
                        <h1 class="text-cs-warning fw-bold">Oops!</h1>
                        <h4 class="fw-bold">404 – PAGE NOT FOUND</h4>
                        <h6 class="text-dark">The page you are looking for might have been removed had its name changed or is temporarily unavailable.</h6>
                        <a href="{{url('/')}}" class="btn btn-primary mt-3">GO TO HOMEPAGE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
