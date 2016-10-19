@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Bikes</div>

                    <div class="panel-body">
                      <h1>  All bikes </h1>


                        <!-- <div class="row">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                      <th>id</th>
                                      <th>title</th>
                                      <th>description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($bikes as $bike)
                                  <tr>
                                    <td>{{ $bike->id }}</td>
                                    <td>{{ $bike->title }}</td>
                                    <td>{{ $bike->description }}</td>
                                  </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div> -->

                        <ul id="sortable">
                          <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 1</li>
                          <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 2</li>
                          <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 3</li>
                          <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 4</li>
                          <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 5</li>
                          <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 6</li>
                          <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 7</li>
                        </ul>

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
