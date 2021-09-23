@if (Session::has ('success'))

<div style="background: lightgreen; color: #1D5E10;"> 
	 <p>
	 	{{ Session::get('success') }}
	 </p>
</div>

@endif


@if (Session::has ('delete'))

<div style="background: lightskyblue; color: #001375;"> 
	 <p>
	 	{{ Session::get('delete') }}
	 </p>
</div>

@endif


<form method="POST" action="{{ route('blog.store') }}" >


	{{ csrf_field() }}

	<br>

	<label for="">Title</label>
	<input type="text" name="title" required="">

	<br>

	<label for="">Body</label>
	<textarea name="body" id="" cols="30" rows="10" required=""></textarea>

	<br>
	
	<label for="">Author</label>
	<input type="text" name="author">

	<br>
	
	<label for="">Date</label>
	<input type="date" name="date">

	<br>
	
	<label for="">Keywords</label>
	<input type="text" name="keywords">

	<br>
	
	<button type="submit">Send</button>
</form>


@foreach($posts as $post)

	<h3>{{ $post->title }}</h3>
	<p>{{ $post->body }}</p>
	<h5>{{ $post->author }}</h5>
	<h6>{{ $post->date }}</h6>
	<h6>{{ $post->keywords }}</h6>

	<form method="POST" action="{{ route('blog.destroy', $post->id) }}">
		<button type="submit">
			Borrar
		</button>

		{{ csrf_field() }}
		{{ method_field('DELETE') }}

	</form>
	<hr>

@endforeach