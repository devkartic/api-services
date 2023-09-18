@extends('website.app')
@section('content')
    <div class="container">
        <div class="row cs-pb-30">
            <div class="col-md-6 cs-mt-30">
                <div class="card bg-linearGradient">
                    <div class="card-header">
                        Categories tree view
                    </div>
                    <div class="card-body">
                        {!! $categories_tree !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
