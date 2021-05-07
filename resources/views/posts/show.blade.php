@extends('layouts.app')

@section('content')
    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           
            <a class="btn button btn-info" href="/posts">Back</a> <br><br>
            
            <div class="card">       
                <div class="card-body">
                    Title : {{ $post->title }} <br>
                    Description : {{ $post->description }} <br>
                    Created At : {{ $post->created_at }} <br>
                    Post Image: 
                    @if ($post->img)    
                        <img src="{{ URL::asset('/storage/img/'.$post->img)}} " alt="{{ $post->img }}" style="width:100px; height::100px;">
                    @else
                        No Image Available
                    @endif
                    <p>Comments Section:</p>
                    @if ($comments)

                        @foreach ($comments as $comment)
                                <p>{{ $comment->description }}</p>
                            @endforeach
                    @endif
                    <h4> Add Comment </h4>
                    <form method="POST" action="{{ route('comments.store') }}">
                        @csrf
                        <div class="form-group">
                            <textarea class="form-control" name="description" id="" cols="30" rows="2"></textarea>
                            <input type="hidden" name="post_id" value="{{ $post->id }}">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Add Comment">
                        </div>
                    </form>
                    </div>
            </div>
        </div>
    </div>
</div>
    
@endsection

