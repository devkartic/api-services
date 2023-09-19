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
                        <div class="list-group">
                            @php
                                function displayTree($elements, $level = 0):void {
                                    foreach ($elements as $element) {
                                        $hasChildren = $element->children->isNotEmpty();
                                        echo '<li class="list-group-item">';
                                        echo str_repeat('&nbsp;&nbsp;&nbsp;&nbsp;', $level);
                                        if($hasChildren) echo '<span class="folder-icon folder-open"></span>'; // Closed folder icon
                                        echo $element->name;
                                        echo '</li>';
                                        if ($hasChildren) {
                                            displayTree($element->children, $level + 1);
                                        }
                                    }
                                }
                                // Display the tree
                                displayTree($tree);
                            @endphp
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
