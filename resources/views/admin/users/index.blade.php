@extends('layouts.admin')
@section('content')
    <style>
        .media
        {
            /*box-shadow:0px 0px 4px -2px #000;*/
            margin: 20px 0;
            padding:30px;
        }
        .dp
        {
            border:10px solid #eee;
            transition: all 0.2s ease-in-out;
        }
        .dp:hover
        {
            border:2px solid #eee;
            transform:rotate(360deg);
            -ms-transform:rotate(360deg);
            -webkit-transform:rotate(360deg);
            /*-webkit-font-smoothing:antialiased;*/
        }

    </style>

    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">
                Users <small> View Users</small>
            </h1>
        </div>
    </div>

    <div class="row">

    @foreach($users as $user)

        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="media">
                <a class="pull-left" href="#">
                    <img class="media-object dp img-circle" src="http://www.gravatar.com/avatar/{{md5( strtolower( trim($user->email)))}}?s=100&d=http://cdn3.rd.io/user/no-user-image-square.jpg" style="width: 100px;height:100px;">
                </a>
                <div class="media-body">
                    <h4 class="media-heading">{{$user->name}}<small>  [000{{$user->id}}]</small></h4>
                    <h6><i class="fa fa-envelope"></i>   <a href="mailto:{{$user->email}}">{{$user->email}}</a></h6>
                    <hr style="margin:8px auto">

                    <span class="label label-info">Admin</span>
                    <span class="label label-warning">New User</span>

                </div>
            </div>

        </div>
     @endforeach
    </div>

@endsection