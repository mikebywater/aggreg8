@extends('layouts.admin')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">
                Sources <small>Manage News Sources</small>
            </h1>
        </div>
    </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        News Sources
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>URL</th>
                                    <th>Filter ?</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($sources as $source)
                                    <tr>
                                        <td>{{$source->name}}</td>
                                        <td><a href="{{$source->url}}" target="_blank">{{substr($source->url,0,40)}}...</a></td>
                                        @if($source->filter>0)
                                            <td>Y</td>
                                        @else
                                            <td>N</td>
                                        @endif
                                    </tr>

                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <p><a class="btn btn-info pull-right" href="/admin/sources/create" role="button">Add Source</a></p>
                    </div>
                </div>

            </div>
        </div>
@endsection