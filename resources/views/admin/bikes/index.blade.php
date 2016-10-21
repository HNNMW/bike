@extends('layouts.app')
<meta name="csrf-token" content="{{ csrf_token() }}" />
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Bikes</div>

                    <div class="panel-body">
                      <h1>  All bikes </h1>
                        <div class="row">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                      <th>id</th>
                                      <th>title</th>
                                      <th>description</th>
                                      <th></th>
                                    </tr>
                                </thead>
                                <tbody id="sortable">
                                @foreach ($bikes as $bike)
                                  <tr id="{{ $bike->id }}" class="ui-state-default items">
                                    <td>{{ $bike->id }}</td>
                                    <td>{{ $bike->title }}</td>
                                    <td>{{ $bike->description }}</td>
                                    <td>
                                    <a href="{{ url('/admin/bikes/' . $bike->id . '/edit') }}"><span class="glyphicon glyphicon-edit"></span></a> | <a href="url"><span class="glyphicon glyphicon-trash"></a>
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
            }).done(function(data) {
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
