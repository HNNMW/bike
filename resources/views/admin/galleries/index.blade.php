@extends('layouts.app')
<meta name="csrf-token" content="{{ csrf_token() }}"/>
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Toevoegen</div>

                    <div class="panel-body">

                        <form class="form-horizontal" action="{{ url('/admin/galleries/store') }}"
                              method="POST" enctype="multipart/form-data">

                            {{ csrf_field() }}


                            <div class="form-group">
                                <label for="title" class="control-label col-sm-2">
                                    Titel
                                </label>
                                <div class="col-sm-10">
                                    <input id="title" type="text" class="form-control" name="title"
                                           value="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="description" class="control-label col-sm-2">
                                    Beschrijving
                                </label>
                                <div class="col-sm-10">
                                    <textarea id="description" class="form-control"
                                              name="description"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="images" class="control-label col-sm-2">
                                    Foto
                                </label>
                                <div class="col-sm-10">

                                    <input id="input-2" name="image" type="file" class="file" data-show-upload="false"
                                           data-show-caption="true">

                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2">
                                    <input type="submit" class="btn btn-primary" value="Upload">
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
                    var bike_order = $(this).sortable('toArray', {attribute: 'id'});
                    var jsondata = JSON.stringify(bike_order);

                    console.log(jsondata);
                    // POST to server using $.post or $.ajax
                    $.ajax({
                        data: {
                            "bike_order": jsondata,
                        },
                        type: 'POST',
                        url: '/admin/bikes/updateSort',

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
