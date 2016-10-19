@extends('layouts.app')

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
                                    </tr>
                                </thead>
                                <tbody id="sortable">
                                @foreach ($bikes as $bike)
                                  <tr class="ui-state-default">
                                    <td>{{ $bike->id }}</td>
                                    <td>{{ $bike->title }}</td>
                                    <td>{{ $bike->description }}</td>
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
      $( function() {
        $( "#sortable" ).sortable();
        $( "#sortable" ).disableSelection();
      } );
    </script>
@endsection
