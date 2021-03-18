@extends('layouts.inti')
@section('content')


<div class="col-lg-8">
    <h5 class="mt-5 text-uppercase">Delete Photo</h5>
    @if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{Session::get('success')}}
    </div>
    @endif
    <form method="POST" onsubmit="return validateForm()" action="{{route('article.delete',$project->id)}}">
        @csrf
        @method('DELETE')
        <h5 class="text-center">Are you sure you want to delete {{ $project->category_id }} ?</h5>
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
                <div class="form-row">
                    <div class="name text-uppercase">Upload Photo</div>
                        <div class="value">
                            <div class="input-group">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg" id="formFileLg" type="file">
                                </div>
                            </div>
                        </div>
                </div>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-danger">Delete</button>
    </form>
</div>
    

@endsection