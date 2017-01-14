@extends('layouts.app')
<meta name="csrf-token" content="{{ csrf_token() }}"/>
@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Bikes</div>

                    <div class="panel-body">
                        <a type="btn" href="{{ url('/admin/galleries/create') }}"><span
                                    class="glyphicon glyphicon-download"></a>
                        <h1> All bikes </h1>
                        <div class="row">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>id</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody id="sortable">
                                @foreach ($gallery_images  as $gallery_image)
                                    <tr id="{{ $gallery_image->id }}" class="ui-state-default items">
                                        <td><img src="{{ url( $gallery_image->url )}}" alt="" border=3 height=100 width=150></img></td>
                                        <td>
                                            <a href="{{ url('/admin/galleries/' . $gallery_image->id . '/destroy') }}"><span
                                                        class="glyphicon glyphicon-trash"></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('javascript')
    <script>
        $(document).ready(function () {

            var fixHelper = function (e, ui) {
                ui.children().each(function () {
                    $(this).width($(this).width());
                });
                return ui;
            };

            $('#sortable').sortable({
                items: '.items',
                helper: fixHelper,
                update: function (event, ui) {
                    var bike_order = $(this).sortable('toArray', {attribute: 'id'});
                    var jsondata = JSON.stringify(bike_order);

                    // console.log(jsondata);
                    // POST to server using $.post or $.ajax
                    $.ajax({
                        data: {
                            "gallery_order": jsondata,
                        },
                        type: 'POST',
                        url: '/admin/galleries/updateSort',

                    })
                }
            });

        });
    </script>

    <script>
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });
    </script>

@endsection