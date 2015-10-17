@extends('layouts.master')
@section('content')

    <div class="container"/>
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h1>Sources</h1>
                    <p>This is the list of active sources that are scraped every 10 minutes to return the latest news. Click to add more sources</p>
                    <p><a class="btn btn-info btn-lg" href="/admin/sources/create" role="button">Add more</a></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                 <table class="table table-striped">
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
        </div>
    </div>
@endsection