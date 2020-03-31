<div class="mu-sidebar-widget mu-sidebar-subscribe-widget">
	<h2 class="mu-sidebar-widget-title">News subscribe</h2>

	<form class="mu-subscribe-form" 
		  action="{{ route('subscriber') }}" 
		  method="POST" novalidate="novalidate">
		{{ csrf_field() }}
		<input placeholder="Ingrese su email" type="email" name="email">
		<div class="text-danger">{{ $errors->first('email') }}</div>
		<button class="mu-subscribe-btn">Subscribe</button>
	</form>

</div>