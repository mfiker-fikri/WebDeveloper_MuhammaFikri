@extends('layouts.inti')
@section('content')

<div class="container-fluid" id="kolom_create">
    <div class="row">
        <div class="col align-self-center" id="kolom_create1">
            <div class="card shadow">
                <div class="card-header border-0">
                    <h5 class="card-title text-uppercase">Ubah Artikel</h5>
                </div>
                    @if(Session::has('success'))
                    <div class="card-subtitle alert alert-success pt-1" role="alert">
                        {{Session::get('success')}}
                    </div>
                @endif
                <div class="card-body">
                    <form method="POST" onsubmit="return validateForm()" name="contactUsForm" id="contactUsForm" action="{{route('article.update',$articles->id)}}">
                        @csrf
                                <div class="form-group mt-1">
                                    <div class="name text-uppercase mt-2 pt-1">Kategori</div>
                                        <select class="form-control" name="category" id="category">
                                            <option value="">Pilih kategori</option>
                                                @foreach($categories as $category)
                                                    <option value="{{ $category->id }}" @if(old('category',$articles->category_id)==$category->id) selected="selected" @endif>{{ $category->name }}</option>
                                                @endforeach
                                        </select>
                                </div>
                                <div class="form-group">
                                    <div class="name text-uppercase mt-2 pt-2">Judul</div>
                                        <input type="text" class="input--style-5 form-control" id="title" name="title" placeholder="Judul" value="{{old('title',$articles->title)}}">
                                </div>
                                <div class="form-group">
                                    <div class="name text-uppercase mt-2 pt-2">artikel</div>
                                        <input class="form-control" placeholder="Artikel" id="content" name="content" value="{{old('content',$articles->content)}}" />
                                </div>
                                {{-- <div class="form-group">
                                        <div class="name text-uppercase mt-2 pt-2">Image</div>
                                        <input class="mt-2 pt-2 form-control" type="file" name="image" id="image" placeholder="Choose image" value="{{old('path',$articles->path)}}" onchange="previewFile(this)" />
                                        <img src="{{ asset('storage/'.$articles->path) }}" id="previewImg" alt="image" style="max-width: 130px;margin-top:20px;" />
                                        <p> {{ $articles->path }} </p>
                                </div> --}}
                                {{-- <div class="form-row">
                                    <div class="name text-uppercase">Upload Photo</div>
                                        <div class="value">
                                            <div class="input-group">
                                                <div class="mb-3">
                                                    <input class="form-control form-control-lg" id="formFileLg" type="file">
                                                </div>
                                            </div>
                                        </div>
                                </div>--}} 
                                <div class="button1">
                                    <a class="btn btn-danger" href="{{route('manage.home')}}" role="button"><i class="fas fa-times"></i>Close</a>
                                    <button class="btn btn-warning" type="reset"><i class="fas fa-undo"></i>Reset</button>
                                    <button type="submit" class="btn btn-primary"><i class="fas fa-plus"></i>Update</button>
                                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    

@endsection


{{-- <div class="col-lg-8">
    <h5 class="mt-5 text-uppercase"> Photo</h5>
    @if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{Session::get('success')}}
    </div>
    @endif
    <form method="POST" action="{{route('article.update',$articles->id)}}">
        @csrf
                <div class="form-group">
                    <div class="name text-uppercase">Kategori</div>
                        <select class="form-control" name="category">
                            <option value="">Pilih kategori</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" @if(old('category',$articles->category_id)==$category->id) selected="selected" @endif>{{ $category->name }}</option>
                                @endforeach
                        </select>
                </div>
                <div class="form-group">
                    <div class="name text-uppercase">Judul</div>
                        <input type="text" class="input--style-5 form-control" id="formGroupExampleInput" name="title" placeholder="Judul" value="{{old('title',$articles->title)}}">
                </div>
                <div class="form-group">
                    <div class="name text-uppercase">artikel</div>
                        <textarea class="form-control" placeholder="Artikel" id="floatingTextarea2" style="height: 100px" name="content" value="{{old('content',$articles->content)}}"></textarea>
                </div>
                {{-- <div class="form-row">
                    <div class="name text-uppercase">Upload Photo</div>
                        <div class="value">
                            <div class="input-group">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg" id="formFileLg" type="file">
                                </div>
                            </div>
                        </div>
                </div> 
            <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div> --}}