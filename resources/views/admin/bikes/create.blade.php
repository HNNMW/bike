@extends('layouts.app')
<meta name="csrf-token" content="{{ csrf_token() }}"/>
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Toevoegen</div>

                    <div class="panel-body">

                        <form class="form-horizontal" action="{{ url('/admin/bikes/store') }}"
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
                                    Foto's
                                </label>
                                <div class="col-sm-10">
                                    {{--<input class="file" multiple="true" name="images[]" type="file">--}}
                                    <label class="control-label">Select File</label>
                                    <input id="input-2" name="images[]" type="file" class="file" multiple data-show-upload="false" data-show-caption="true">

                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2">
                                    <input type="submit" class="btn btn-primary" value="Maak">
                                </div>
                            </div>

                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
