@extends('layouts')

@section('content')
    <div class="container">
        <div class="title"><h2>Create an Article</h2></div>
        <form method="POST" action="/articles/{{ $article->id }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control @error('title') border border-danger @enderror" name="title" value="{{ $article->title }}" >
                @error('title')
                    <small class="text-danger">{{ $errors->first('title') }}</small> 
                @enderror
            </div>
            <div class="form-group">
                <label for="excerpt">Excerpt</label>
                <input type="text" class="form-control @error('excerpt') border border-danger @enderror" name="excerpt" value="{{ $article->excerpt }}" >
                @error('excerpt')
                    <small class="text-danger">{{ $errors->first('excerpt') }}</small> 
                @enderror
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <input type="text" class="form-control @error('body') border border-danger @enderror" name="body" value="{{ $article->body }}" >
                @error('body')
                    <small class="text-danger">{{ $errors->first('body') }}</small> 
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>
@endsection