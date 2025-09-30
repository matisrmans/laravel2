

<h1>Hello, {{ $name }}!</h1>

<h2>Posts</h2>
<ul>
	@foreach ($posts as $post)
		<li>
			<a href="{{ route('posts.show', $post->id) }}"><strong>{{ $post->title }}</strong></a><br>
			{{ $post->content }}
		</li>
        <button>Delete</button>
	@endforeach
	@if ($posts->isEmpty())
		<li>No posts found.</li>
	@endif
</ul>


<a href="{{ url('/posts/create') }}">Go to Form</a>