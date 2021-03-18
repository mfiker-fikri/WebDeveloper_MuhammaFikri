@extends('layouts.inti')
@section('content')

<div class="container-fluid" id="kolom1">
    <div class="row">
        <div class="col" id="kolom_1">
            <div class="card shadow" id="shadow_card">
                <div class="card-header border-0">
                    <div class="row">
                        <div class="col-md-4">
                            <h2 class="text-uppercase">Manajemen Artikel</h2>
                        </div>
                        <div class="col-md-4 ms-auto">
                                <a class="btn btn-primary btn-sm" href="{{route('article.create')}}" role="button"><i class="fa fa-plus"></i>&nbsp;Tambah Artikel</a>
                        </div>
                    </div>
                </div>
                        @if(Session::has('success'))
                        <div class="col-12 alert alert-success mt-2 pt-2" role="alert">
                            {{Session::get('success')}}
                        </div>
                        @endif
                        
                        <div class="card-body">
                            <table class="table table-striped" onsubmit="return validateForm()" style="margin-top: 50px">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col" class="hidden-xs">Judul</th>
                                        <th scope="col">Kategori</th>
                                        <th scope="col">Artikel</th>
                                        {{-- <th scope="col">Foto</th> --}}
                                        <th scope="col">Detail</th>
                                        <th scope="col">Edit</th>
                                        <th scope="col">Delete</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                
                                    @foreach ($homes as $index=>$home)
                                
                                    <tr>
                                        <td scope="row">{{ $index+1 }}</td>
                                        <td scope="row">{{ $home->title }}</td>
                                        <td scope="row">{{ $home->category->name }}</td>
                                        <td scope="row">{{ Str::limit( $home->content, 150 ) }}</td>
                                        {{-- <td scope="row"><img src="{{ asset('storage/'.$home->path) }}" style="max-width: 60px;" width="60px;" height="60px;"></td> --}}
                                        {{-- <td scope="row" colspan="2"><a href="{{ route('article.edit',$home->id) }}">Edit</a></td>
                                        <td scope="row"><a href="{{ route('article.delete',$home->id) }}">Delete</a></td> --}}
                                        <td scope="row">
                                            <a class="btn btn-success btn-sm" role="button" href="{{ route('article.show',$home->id) }}"><i class="fas fa-eye"></i></a>
                                        </td>
                                        <td scope="row">
                                            <a class="btn btn-warning btn-sm" role="button" href="{{ route('article.edit',$home->id) }}"><i class="fas fa-info"></i></a>
                                        </td>
                                        <td scope="col">
                                            <a class="btn btn-danger btn-sm" onclick="return konfirmasi()" role="submit" href="{{ route('article.delete',$home->id) }}"><i class="far fa-trash-alt mr-2"></i></a>
                                        </td>
                                    </tr>

                                    @endforeach

                                </tbody>
                            </table>
                        {{$homes->render()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    




@endsection