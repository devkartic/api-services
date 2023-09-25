@extends('website.app')
@section('content')
    <style>
        .tree, .tree ul {
            margin: 0;
            padding: 0;
            list-style: none
        }

        .tree ul {
            margin-left: 1em;
            position: relative
        }

        .tree ul ul {
            margin-left: .5em
        }

        .tree ul:before {
            content: "";
            display: block;
            width: 0;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            border-left: 1px solid
        }

        .tree li {
            margin: 0;
            padding: 0 1em;
            line-height: 2em;
            color: #369;
            font-weight: 700;
            position: relative
        }

        .tree ul li:before {
            content: "";
            display: block;
            width: 10px;
            height: 0;
            border-top: 1px solid;
            margin-top: -1px;
            position: absolute;
            top: 1em;
            left: 0
        }

        .tree ul li:last-child:before {
            background: #fff;
            height: auto;
            top: 1em;
            bottom: 0
        }

        .indicator {
            margin-right: 5px;
        }

        .tree li a {
            text-decoration: none;
            color: #369;
        }

        .tree li button, .tree li button:active, .tree li button:focus {
            text-decoration: none;
            color: #369;
            border: none;
            background: transparent;
            margin: 0px 0px 0px 0px;
            padding: 0px 0px 0px 0px;
            outline: 0;
        }
    </style>
    <div class="container">
        <div class="row cs-pb-30">
            <div class="col-md-6 cs-mt-30">
                <div class="card bg-linearGradient">
                    <div class="card-header">
                        Categories tree view
                    </div>
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
                                        echo '<li>'.$element->name;
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
                            <script>
                                $.fn.extend({
                                    treed: function (o) {
                                        var openedClass = 'fa-minus';
                                        var closedClass = 'fa-plus';

                                        if (typeof o != 'undefined') {
                                            if (typeof o.openedClass != 'undefined') {
                                                openedClass = o.openedClass;
                                            }
                                            if (typeof o.closedClass != 'undefined') {
                                                closedClass = o.closedClass;
                                            }
                                        }
                                        ;

                                        //initialize each of the top levels
                                        var tree = $(this);
                                        tree.addClass("tree");
                                        tree.find('li').has("ul").each(function () {
                                            var branch = $(this); //li with children ul
                                            branch.prepend("<i class='fa " + closedClass + "'></i> ");
                                            branch.addClass('branch');
                                            branch.on('click', function (e) {
                                                if (this == e.target) {
                                                    var icon = $(this).children('i:first');
                                                    icon.toggleClass(openedClass + " " + closedClass);
                                                    $(this).children().children().toggle();
                                                }
                                            })
                                            branch.children().children().toggle();
                                        });
                                        //fire event from the dynamically added icon
                                        tree.find('.branch .indicator').each(function () {
                                            $(this).on('click', function () {
                                                $(this).closest('li').click();
                                            });
                                        });
                                        //fire event to open branch if the li contains an anchor instead of text
                                        tree.find('.branch > a').each(function () {
                                            $(this).on('click', function (e) {
                                                $(this).closest('li').click();
                                                e.preventDefault();
                                            });
                                        });
                                        //fire event to open branch if the li contains a button instead of text
                                        tree.find('.branch > button').each(function () {
                                            $(this).on('click', function (e) {
                                                $(this).closest('li').click();
                                                e.preventDefault();
                                            });
                                        });
                                    }
                                });

                                //Initialization of tree views
                                $('#cs_tree').treed();
                            </script>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
