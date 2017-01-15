@extends('layouts.app')
<meta name="csrf-token" content="{{ csrf_token() }}"/>
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Wijzig {{ $bike->title }}</div>

                    <div class="panel-body">

                        <form class="form-horizontal" action="{{ url('/admin/bikes/' . $bike->id . '/update') }}"
                              method="POST" enctype="multipart/form-data">

                            {{ csrf_field() }}


                            <div class="form-group">
                                <label for="title" class="control-label col-sm-2">
                                    Titel
                                </label>
                                <div class="col-sm-10">
                                    <input id="title" type="text" class="form-control" name="title"
                                           value="{{ $bike->title }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="description" class="control-label col-sm-2">
                                    Beschrijving
                                </label>
                                <div class="col-sm-10">
                                    <textarea id="description" class="form-control"
                                              name="description">{{ $bike->description }}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="images" class="control-label col-sm-2">
                                    Foto's
                                </label>
                                <div class="col-sm-10">
                                    <input class="file" multiple="true" name="images[]" type="file">

                                </div>
                            </div>
                            <div class="row">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>id</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody id="sortable">
                                    @foreach ($bike->images  as $bike_image)
                                        <tr id="{{ $bike_image->id }}" class="ui-state-default items">
                                            <td><img src="{{ url( $bike_image->url )}}" alt="" border=3 height=100 width=150></img></td>
                                            <td>
                                                <a href="{{ url('/admin/bikes/' . $bike_image->id . '/destroyImage') }}"><span
                                                            class="glyphicon glyphicon-trash"></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2">
                                    <input type="submit" class="btn btn-primary" value="Update">
                                </div>
                            </div>

                        </form>


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
                    var bike_image_order = $(this).sortable('toArray', {attribute: 'id'});
                    var jsondata = JSON.stringify(bike_image_order);


                    $.ajax({
                        data: {
                            "bike_image_order": jsondata,
                        },
                        type: 'POST',
                        url: '/admin/bikes/updateImageSort',

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
