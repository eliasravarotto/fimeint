<h2 class="mu-sidebar-widget-title">Te Puede Interesar</h2>
<div class="mu-popular-content-widget mt-1">
	@if(isset($data))
		@php $posts=\App\Helpers\Helper::recentPosts($data['categoria']) @endphp
	@else
		@php $posts=\App\Helpers\Helper::recentPosts() @endphp
	@endif

	@foreach($posts as $post)
	<div class="media">
	  <a href="{{ route('show_post', [ 'slug' => $post->slug]) }}" class="mu-popular-post-img">
	  	<img src="{{Storage::url($post->foto)}}" alt="image">
	  </a>
	  <div class="media-body">
		<h3 class="mb-1"><a href="{{route('show_post', $post->slug)}}"><b>{{$post->titulo}}</b></a></h3>
	    <ul class="mu-blog-meta mb-0">
			<li>Publicado: {{$post->created_at->diffForHumans()}}</li>
		</ul>
		<p>{{substr($post->descripcion, 0, 50).'...'}}</p>
	  </div>
	</div>
	@endforeach
</div>	