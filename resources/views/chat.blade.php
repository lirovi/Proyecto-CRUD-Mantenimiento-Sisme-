@extends('layout.app')

@section('content')
	<div class="container">
		<h2 class="text-center text-muted">
			{{ $post->title}}
		</h2>
		<pre>
			{{ $post->body }}
		</pre>

		<comments-box
			get-comment_url="{{ route('comments.list', $post->id)}}"
			add_comment_url="{{ route('comments.create', $post->id)}}"
			post_id="{{ $post_id}}"
			/>
		
	</div>