@extends('website.app')
@section('content')
    <div class="container">
        <link rel="stylesheet" href="{{ URL::asset('assets/custom/css/custom-style-tree-view.css') }}" >
        <div class="row cs-pb-30">
            <div class="col-md-6 cs-mt-30">
                <div class="card">
                    <div class="card-header"><button class="btn btn-sm btn-default fw-bold fs-6">Categories tree view</button><a href="#" class="float-end btn btn-sm btn-warning">Source</a></div>
                    <div class="card-body">
                        <ul id="cs_tree">
                            <li><a href="#">Categories</a>
                            @php
                                function displayTree($elements, $parent_id=0, $current_level = 0, $previous_level = -1):void {
                                    foreach ($elements as $element) {
                                        if($current_level > $previous_level){
                                            echo '<ul>';
                                        }
                                        if($current_level == $previous_level) {
                                            echo '</li>';
                                        }
                                        echo '<li class="text-capitalize">'.$element->name;
                                        if($current_level > $previous_level) {
                                            $previous_level = $current_level;
                                        }
                                        $current_level++;
                                        displayTree($element->children, $element->id, $current_level, $previous_level);
                                        $current_level--;
                                    }
                                    if($current_level == $previous_level) {
                                        echo '</li></ul>';
                                    }
                                }
                                // Display the tree
                                displayTree($tree);
                            @endphp
                            </li>
                        </ul>
                        <script type="text/javascript" src="{{ URL::asset('assets/custom/js/custom-tree-view.js') }}" ></script>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
