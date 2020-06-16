@extends('layouts')

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <div id="content">
                @forelse ($articles as $article)
                    <div class="title">
                        <h2><a href="{{ $article->path() }}">{{ $article->title }}</a></h2>
                    </div> 
                        <p><img src="/images/banner.jpg" alt="" class="image image-full" /> </p>
                    
                        {{ $article->excerpt }}
                @empty
                    <p>NO relevent articles</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection