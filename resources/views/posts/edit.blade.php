@extends('layouts.app')

@section('content')
 
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <a class="btn button btn-info" href="/posts">Back</a> <br><br>
                  <div class="card">       
                    <div class="card-body">
                        <form method="POST" action=" {{ route('posts.update', $post->id)}} ">
                            @method('PATCH')
                            @csrf

                            <div class="form-group row">
                                <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>
    
                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control" name="title" value="{{ $post->title }}" required  autofocus>        
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>
    
                                <div class="col-md-6">
                                    <textarea name="description" class="form-control" value="{{ $post->description }}">{{ $post->description }}</textarea>
                                
                                </div>
                            </div>
                            
                               
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Submit') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
@endsection
