@extends('layouts.app')
<meta name="csrf-token" content="{{ csrf_token() }}"/>
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Slider Images</div>

                    <div class="panel-body">
                        {{--<h1> Slider Images </h1>--}}

                        <form class="form-horizontal" action="{{ url('/admin/sliders/store') }}"
                              method="POST" enctype="multipart/form-data">

                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="images" class="control-label col-sm-2">
                                    Uploaden
                                </label>
                                <div class="col-sm-10">
                                    <input class="file" multiple="true" name="images[]" type="file">
                                    {{--<label class="control-label">Select File</label>--}}
                                    {{--<input id="input-2" name="images[]" type="file" class="file" multiple--}}
                                           {{--data-show-upload="false" data-show-caption="true">--}}

                                </div>
                            </div>

                        </form>


                        <div class="row">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Foto</th>
                                    <th>Edit</th>
                                </tr>
                                </thead>
                                <tbody id="sortable">
                                @foreach ($slider_images as $slider_image)
                                    <tr id="{{ $slider_image->id }}" class="ui-state-default items">
                                    <td>{{ $slider_image->id }}</td>
                                    <td><a href="{{ url('/admin/sliders/' . $slider_image->id . '/destroy') }}"><span
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


    <script>
        $('#sortable').sortable({
            items: '.items',
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
                    url: '/admin/bikes/updateSort'
                }).done(function (data) {
                    console.log("Done");
                    console.log(data);
                })
            }
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
