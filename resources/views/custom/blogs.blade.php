@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			@if ($user_id !== '')
			    <a href="/create"><button type="submit" class="btn btn-success">Add new post</button> </a>
			@endif
			<div class="panel panel-default">

			@foreach($posts as $post)
				<div class="panel-heading"><a href="/post-{{ $post->id }}">{{ $post->title or '' }}</a>
				    </div>
                <div class="panel-body">
					Created at - {{ $post->created_at or '' }}
				</div>
				<div class="panel-body">
					{{ $post->short_story or '' }}
				</div>
			@endforeach
			</div>
		</div>
	</div>
</div>
@endsection