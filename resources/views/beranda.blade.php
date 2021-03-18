@extends('layouts.app')
@section('content')
<main>
        <section class="py-5 text-center shadow-sm h-100" id="header_galeri">
            <div class="row py-lg-5 mx-auto">
                <div class="col align-self-center mx-auto text-uppercase align-middle py-1" id="header_galeri3">
                    {{-- < xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24">
                        <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path>
                        <circle cx="12" cy="13" r="4"></circle> --}}
                    <img class="mt-4" src="{{asset('/favicon/journalist.png')}}" alt="logo favicon" width="50" height="50">
                    <h1 class="fw-light font-monospace">Artikel</h1>
                    
                </div>
            </div>
        </section>
        
        @foreach($articles as $article)
        <div class="album py-5" id="menu_photo">
            <div class="container">
                {{-- <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3"> --}}
                    <div class="col" id="grid_foto">
                        <div class="card shadow-lg p-3 m-3 bg-body rounded" style="width: 100%;">
                            {{-- <img src="{{ asset('storage/'.$article->path) }}" class="card-img-top" alt="gambar" width="20%" height="20%">
                            <small>{{ $article->path }}</small> --}}
                            <div class="card-body">
                                <h2 class="card-title mt-3 text-center">{{ $article-> title }}</h2>
                                <p class="card-text">{{ Str::limit($article->content, 200) }}</p>
                                    {{-- <a href="{{ route('article.show',$article->id) }}" class="btn-btn-primary">Read More &rarr;</a> --}}
                            </div>
                        </div>
                    </div>
                    
                    {{-- <div class="col">
                        <div class="card shadow-lg p-3 mb-5 mt-4 bg-body rounded">
                            <img src="..." class="card-img-top" alt="..." width="100%" height="225">
                            <h2 class="card-title">{{ $article-> title }}</h2>
                                <div class="card-body">
                                    <p class="card-text">{{ Str::limit($article->content, 200) }}</p>
                                    <a href="{{ route('article.show',$article->id) }}" class="btn-btn-primary">Read More &rarr;</a>
                                </div>
                        </div>
                    </div> --}}
                    
                    {{-- <div class="col">
                        <div class="card shadow-lg p-3 mb-5 mt-4 bg-body rounded">
                            <img src="..." class="card-img-top" alt="..." width="100%" height="225">
                            <h2 class="card-title">{{ $article-> title }}</h2>
                                <div class="card-body">
                                    <p class="card-text">{{ Str::limit($article->content, 200) }}</p>
                                    <a href="{{ route('article.show',$article->id) }}" class="btn-btn-primary">Read More &rarr;</a>
                                </div>
                        </div>
                    </div> --}}
                {{-- </div> --}}
            </div>
        </div>
        @endforeach
        {{ $articles->render() }}
</main>
@endsection