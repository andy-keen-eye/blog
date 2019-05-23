@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">

				<div class="panel-heading">{{ $blog_post->title or '' }}</div>
                <div class="panel-body">
					Created at - {{ $blog_post->created_at or '' }}
					@if ($user_id !== '')
					    <a href="/edit-{{ $blog_post->id }}">Edit this post</a>
					@endif
				</div>
				<div class="panel-body">
					{{ $blog_post->full_story or '' }}
				</div>

			</div>
		</div>
	</div>
</div>
@endsection