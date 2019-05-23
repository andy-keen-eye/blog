@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">

				<div class="panel-heading">{{ $blog_post->title or '' }}</div>
                <div class="panel-body">
					Created at - {{ $blog_post->created_at or '' }}
					<a href="/post-{{ $post->id }}">{{ $post->title or '' }}</a>
				</div>
				<div class="panel-body">
					{{ $blog_post->full_story or '' }}
				</div>

			</div>
		</div>
	</div>
</div>
@endsection