@extends('layouts.admin')
@section('content')
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-header">
                        Welcome <small>{{Auth::user()->name}}</small>
                    </h1>
                </div>
            </div>
            <!-- /. ROW  -->

            <div class="row">
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="panel panel-primary text-center no-boder bg-color-green">
                        <div class="panel-body">
                            <i class="fa fa-bar-chart-o fa-5x"></i>
                            <h3>?</h3>
                        </div>
                        <div class="panel-footer back-footer-green">
                            Daily Visits

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="panel panel-primary text-center no-boder bg-color-blue">
                        <div class="panel-body">
                            <i class="fa fa-book fa-5x"></i>
                            <h3>{{$articleCount}} </h3>
                        </div>
                        <div class="panel-footer back-footer-blue">
                            Articles

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="panel panel-primary text-center no-boder bg-color-red">
                        <div class="panel-body">
                            <i class="fa fa fa-comments fa-5x"></i>
                            <h3>0</h3>
                        </div>
                        <div class="panel-footer back-footer-red">
                            Comments

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="panel panel-primary text-center no-boder bg-color-brown">
                        <div class="panel-body">
                            <i class="fa fa-users fa-5x"></i>
                            <h3>?</h3>
                        </div>
                        <div class="panel-footer back-footer-brown">
                            No. of Visits

                        </div>
                    </div>
                </div>
            </div>

<!--
            <div class="row">


                <div class="col-md-9 col-sm-12 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Bar Chart Example
                        </div>
                        <div class="panel-body">
                            <div id="morris-bar-chart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Donut Chart Example
                        </div>
                        <div class="panel-body">
                            <div id="morris-donut-chart"></div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /. ROW  -->

            <div class="row">
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Activity Feed
                        </div>
                        <div class="panel-body">
                            <div class="list-group">

                                <a href="#" class="list-group-item">
                                    <span class="badge">7 minutes ago</span>
                                    <i class="fa fa-fw fa-comment"></i> Commented on a post
                                </a>
                                <a href="#" class="list-group-item">
                                    <span class="badge">16 minutes ago</span>
                                    <i class="fa fa-fw fa-truck"></i> Order 392 shipped
                                </a>
                                <a href="#" class="list-group-item">
                                    <span class="badge">36 minutes ago</span>
                                    <i class="fa fa-fw fa-globe"></i> Invoice 653 has paid
                                </a>
                                <a href="#" class="list-group-item">
                                    <span class="badge">1 hour ago</span>
                                    <i class="fa fa-fw fa-user"></i> A new user has been added
                                </a>
                                <a href="#" class="list-group-item">
                                    <span class="badge">1.23 hour ago</span>
                                    <i class="fa fa-fw fa-user"></i> A new user has added
                                </a>
                                <a href="#" class="list-group-item">
                                    <span class="badge">yesterday</span>
                                    <i class="fa fa-fw fa-globe"></i> Saved the world
                                </a>
                            </div>
                            <div class="text-right">
                                <a href="#">More Tasks <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-8 col-sm-12 col-xs-12">

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
                        </div>
                    </div>

                </div>
            </div>
            <!-- /. ROW  -->


@endsection