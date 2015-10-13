<!--<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/slate/bootstrap.min.css" rel="stylesheet" integrity="sha256-JcgoO7qVianjbv43Z5KinReHzk9/rEZg5m6z/ZZy3DI= sha512-rYMbEYJa5+7VkGdfAypdYHqwIdCNEBKh8lhKUNIv58tgHQuHHzXC/Bzf66BFDkTjq970Lc6OIEpgllKINGDCKQ==" crossorigin="anonymous">
-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.5/superhero/bootstrap.min.css"/>

<style>
img {
    clip: rect(0px,150px,150px,0px);
}
</style>
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css"/>
<div class="container">
<img src="/img/spurs.png"/><h1>News</h1>
@foreach($articles as $article)
  <div class="well">
      <div class="media">
        @if($article->image)
            <a class="pull-left" href="{{$article->url}}">
                <img class="media-object" src="{{$article->image}}"width="150" height="150">
            </a>
        @endif
  		<div class="media-body">
    		<h3 class="media-heading">{{$article->title}}</h3>

          <p>{{$article->content}}</p>
          <ul class="list-inline list-unstyled ">
  			<li><span><i class="glyphicon glyphicon-calendar"></i> {{$article->age()}} </span></li>
            <li>|</li>
            <span><i class="glyphicon glyphicon-comment"></i> 0 comments</span>
            <li>|</li>
            <li>
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

</div>
