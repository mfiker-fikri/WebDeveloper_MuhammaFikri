@extends('layouts.inti')
@section('content')

<div class="container-fluid" id="kolom_create">
    <div class="row">
        <div class="col align-self-center" id="kolom_create1">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="row">
                        <div class="col-md-4">
                            <h5 class="text-uppercase">Tambah Artikel</h5>
                        </div>
                        {{-- <div class="col-md-4 ms-auto">
                                <a class="btn btn-primary btn-sm" href="{{route('article.create')}}" role="button"><i class="fa fa-plus"></i>&nbsp;Tambah Photo</a>
                        </div> --}}
                    </div>
                </div>
                    @if(Session::has('success'))
                    <div class="card-subtitle alert alert-success mt-2 pt-2" role="alert">
                        {{Session::get('success')}}
                    </div>
                    @endif
                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data" onsubmit="return validateForm()" name="contactUsForm" id="contactUsForm" action="{{route('article.store')}}">
                            {{ csrf_field() }}
                                    <div class="form-group mt-1">
                                        <div class="name text-uppercase mt-2 pt-1">Kategori</div>
                                            <select class="form-control mt-2 ab-t-rpt-2" name="category" id="category">
                                                <option value="">Pilih kategori</option>
                                                    @foreach($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endforeach
                                            </select>
                                            <span class="text-danger" id="categoryError"></span>
                                    </div>
                                    <div class="form-group">
                                        <div class="name text-uppercase mt-2 pt-2">Judul</div>
                                            <input type="text" class="mt-2 pt-2 input--style-5 form-control" id="title" name="title" placeholder="Judul">
                                            <span class="text-danger" id="titleError"></span>
                                    </div>
                                    <div class="form-group">
                                        <div class="name text-uppercase mt-2 pt-2">artikel</div>
                                            <textarea class="mt-2 pt-2 form-control" id="content" name="content" placeholder="Artikel" style="height: 100px"></textarea>
                                            <span class="text-danger" id="contentError"></span>
                                    </div>
                                    {{-- <div class="form-group">
                                        <div class="name text-uppercase mt-2 pt-2">Image</div>
                                        <input class="mt-2 pt-2 form-control" type="file" name="path" id="path" placeholder="Choose image" onchange="previewFile(this)" />
                                        <img id="previewImg" alt="image" style="max-width: 130px; max-height:130px ;margin-top:20px;" />
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
                                        <button type="submit" class="btn btn-primary" id="submit"><i class="fas fa-plus"></i>Create</button>
                                    </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    

@endsection



