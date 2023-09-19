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
                        <ul class="list-group">
                            @php
                                function displayTree($elements, $level = 0):void {
                                    foreach ($elements as $element) {
                                        $hasChildren = $element->children->isNotEmpty();
                                        if ($hasChildren) {
                                            echo '<li class="list-group-item">';
                                            echo '<a data-toggle="collapse" href="#">'.$element->name.'</a>';
                                            echo '<div class="collapse"><ul class="list-group">';
                                            displayTree($element->children, $level + 1);
                                        } else {
                                            echo '<li class="list-group-item">'.$element->name.'</li>';
                                        }
                                    }
                                    echo '</ul></div></li>';
                                }
                                // Display the tree
                                displayTree($tree);
                            @endphp
                            <script>
                                $(document).ready(function () {
                                    // Enable Bootstrap collapse functionality
                                    $('[data-toggle="collapse"]').collapse();

                                    // Handle the click event on parent elements
                                    $('.list-group-item a').on('click', function (e) {
                                        e.preventDefault(); // Prevent the default behavior of the anchor link
                                        $(this).next('.collapse').collapse('toggle'); // Toggle the collapse state of the next element
                                    });
                                });
                            </script>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
