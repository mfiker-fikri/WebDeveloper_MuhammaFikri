{{-- @extends('layouts.inti')
@section('content')

<div class="container-fluid page-wrapper bg-primary p-t-45 p-b-50 mt-7">
    <div class="row">
        <div class="col mb-5 mb-xl-0">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <h1 class="mt-4 text-uppercase">Manajemen Photo</h1>
                        </div>
                        <div class="col-md-4 offset-md-4">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="fa fa-plus "></i>&nbsp;Tambah Photo</button>
                        </div>
                        
                        <table class="table" style="margin-top: 50px">
                            <thead>
                                <tr>
                                <th scope="col">Id</th>
                                <th scope="col" class="hidden-xs">Judul</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Artikel</th>
                                <th scope="col">Photo</th>
                                <th scope="col"><em class="fa fa-cog"></em></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $no=1; ?>
                                @foreach ($galeri as $home)
                            
                            <tr>
                                <td scope="row">{{ $no++ }}</td>
                                <td scope="row">{{ $home->judul }}</td>
                                <td scope="row">{{ $home->kategori }}</td>
                                <td scope="row">{{ $home->artikel }}</td>
                                <td scope="row"><img src="{{ url('foto_galeri/'.$home->foto ) }}" width="100px"></td>
                                <td scope="row">
                                    <a href="#" class="btn btn-sm btn-success">Detail</a>
                                    <a href="#" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="#" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr> 

                            @endforeach
                            
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
    

<!-- Modal -->
{{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title text-uppercase" id="exampleModalLabel">Tambah Photo</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="POST">
                <div class="form-row">
                    <div class="name text-uppercase">Judul</div>
                    <div class="value">
                        <div class="input-group">
                            <input type="text" class="input--style-5 form-control" id="formGroupExampleInput" name="judul" placeholder="Judul">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="name text-uppercase">Kategori</div>
                        <div class="value">
                            <div class="input-group">
                                <div class="rs-select2 js-select-simple select--no-search">
                                    <select class="form-select" name="kategori">
                                        <option disabled="disabled" selected="selected">Choose option</option>
                                        <option>Alam</option>
                                        <option>Subject 2</option>
                                        <option>Subject 3</option>
                                    </select>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="form-row">
                    <div class="name text-uppercase">artikel</div>
                        <div class="value">
                            <div class="input-group">
                                <textarea class="form-control" placeholder="Artikel" id="floatingTextarea2" style="height: 100px" name="artikel"></textarea>
                            </div>
                        </div>
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
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
    </div>
    </div>
</div> --}}




{{-- <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Form Confim</h2>
                </div>
                <div class="card-body">
                    <form method="POST">
                        <div class="form-row m-b-55">
                            <div class="name">Name</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="first_name">
                                            <label class="label--desc">first name</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="last_name">
                                            <label class="label--desc">last name</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Company</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="company">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" name="email">
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">Phone</div>
                            <div class="value">
                                <div class="row row-refine">
                                    <div class="col-3">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="area_code">
                                            <label class="label--desc">Area Code</label>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="phone">
                                            <label class="label--desc">Phone Number</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Subject</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="subject">
                                            <option disabled="disabled" selected="selected">Choose option</option>
                                            <option>Subject 1</option>
                                            <option>Subject 2</option>
                                            <option>Subject 3</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row p-t-20">
                            <label class="label label--block">Are you an existing customer?</label>
                            <div class="p-t-15">
                                <label class="radio-container m-r-55">Yes
                                    <input type="radio" checked="checked" name="exist">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">No
                                    <input type="radio" name="exist">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}
{{-- @endsection --}}