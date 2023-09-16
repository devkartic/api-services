@extends('website.app')
@section('content')
    <div class="container">
        <div class="row cs-pb-30">
            <div class="col-md-6 cs-mt-30">
                <div class="card bg-linearGradient">
                    <div class="card-header">
                        Category of Product API Services
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                List of Categories item
                                <a href="{{ url('categories') }}" class="btn badge bg-primary rounded-pill text-decoration-none">Browse</a>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Single Category
                                <a href="{{ url('categories/1') }}" class="btn badge bg-primary rounded-pill text-decoration-none">Browse</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 cs-mt-30">
                <div class="card bg-linearGradient">
                    <div class="card-header">
                        Product API Services
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                List of Products
                                <a href="{{ url('products') }}" class="btn badge bg-primary rounded-pill text-decoration-none">Browse</a>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Single Product
                                <a href="{{ url('products/1') }}" class="btn badge bg-primary rounded-pill text-decoration-none">Browse</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection