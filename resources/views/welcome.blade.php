<!--<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/slate/bootstrap.min.css" rel="stylesheet" integrity="sha256-JcgoO7qVianjbv43Z5KinReHzk9/rEZg5m6z/ZZy3DI= sha512-rYMbEYJa5+7VkGdfAypdYHqwIdCNEBKh8lhKUNIv58tgHQuHHzXC/Bzf66BFDkTjq970Lc6OIEpgllKINGDCKQ==" crossorigin="anonymous">
-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.5/superhero/bootstrap.min.css"/>


<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css"/>
<div class="container">
<img src="/img/spurs.png"/><h1>News</h1>
@foreach($articles as $article)
  <div class="well">
      <div class="media">
      	<a class="pull-left" href="{{$article->url}}">
    		<img class="media-object" src="{{$article->image}}">
  		</a>
  		<div class="media-body">
    		<h3 class="media-heading">{{$article->title}}</h3>
          <p class="text-right">By Francisco</p>
          <p>{{$article->content}}</p>
          <ul class="list-inline list-unstyled">
  			<li><span><i class="glyphicon glyphicon-calendar"></i> 2 days, 8 hours </span></li>
            <li>|</li>
            <span><i class="glyphicon glyphicon-comment"></i> 0 comments</span>
            <li>|</li>
            <li>
               <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
            </li>
            <li>|</li>
            <li>
            <!-- Use Font Awesome http://fortawesome.github.io/Font-Awesome/ -->
              <span><i class="fa fa-facebook-square"></i></span>
              <span><i class="fa fa-twitter-square"></i></span>
              <span><i class="fa fa-google-plus-square"></i></span>
            </li>
			</ul>
       </div>
    </div>
  </div>
@endforeach

</div>