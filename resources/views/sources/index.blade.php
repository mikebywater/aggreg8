@extends('layouts.master')
@section('content')
    <h1>Sources</h1>
    <table>
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
                    <td>{{$source->url}}</td>
                    @if($source->filter>0)
                        <td>Y</td>
                    @else
                        <td>N</td>
                    @endif
                </tr>

            @endforeach
        </tbody>
    </table>
@endsection