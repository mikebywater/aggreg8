@extends('layouts.master')
@section('content')
@foreach($articles as $article)
  <div class="well">
      <div class="media">
        @if($article->image)
            <a class="pull-left  hidden-xs" href="{{$article->url}}">
                <img class="media-object" src="{{$article->image}}"width="150" height="150">
            </a>
        @endif
  		<div class="media-body">
    		<h3 class="media-heading"><strong>{{$article->title}}</strong></h3>
            <h5 class ="text-info">{{$article->source()->first()->name}}</h5>

          <p class="hidden-xs">{{$article->content}}</p>
          <ul class="list-inline list-unstyled ">
  			<li><span><i class="glyphicon glyphicon-calendar"></i> {{$article->age()}} </span></li>
            <li>|</li>
            <span><i class="glyphicon glyphicon-comment"></i> 0 comments</span>
            <li class="hidden-sm hidden-xs">|</li>
            <li class = "hidden-sm hidden-xs">
            <!-- Use Font Awesome http://fortawesome.github.io/Font-Awesome/ -->
              <span><i class="fa fa-facebook-square"></i></span>
              <span><i class="fa fa-twitter-square"></i></span>
              <span><i class="fa fa-google-plus-square"></i></span>
            </li>
			</ul>
            <p class="text-right"><a class="btn btn-info" href="{{$article->url}}" target="_blank" role="button">More ...</a></p>

       </div>
    </div>
  </div>
@endforeach
@endsection


