@extends('backend.template.master')

@section('content')
 
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{ url('/admin') }}">Dashboard</a>
          </li>
          <li class="breadcrumb-item">
            <a href="{{ route('admin.menu.index') }}">Menu</a>
          </li>
          <li class="breadcrumb-item active">Tambah</li>
        </ol>
        <!-- Example DataTables Card-->
        <div class="card mb-3">
          <div class="card-header">
            <h4>Tambah Menu</h4>
          </div>
          <div class="card-body">
              <form enctype="multipart/form-data" class="form-horizontal" action="{{ route('admin.menu.store') }}" method="POST">
                  @csrf
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="user_id">Admin</label>
                            <select class="form-control" id="user_id" name="user_id">
                                @foreach ($users as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="input_text">Nama Menu</label>
                            <input type="text" class="form-control" id="product_name" name="product_name"
                                placeholder="ex : Keju Susu">
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label for="input_text">Harga</label>
                            <input type="text" class="form-control" id="product_price" name="product_price"
                                placeholder="ex : 20000">
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label for="input_text">Kategori</label>
                            <select class="form-control" id="category" name="category">
                                <option value="Manis Sedang">Manis Sedang</option>
                                <option value="Manis Jumbo">Manis Jumbo</option>
                                <option value="Telur Bebek">Telur Bebek</option>
                                <option value="Telur Ayam">Telur Ayam</option>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="input_text">Deskripsi</label>
                            <textarea name="description" id="description" class="form-control" cols="60" rows="10"></textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="input_file">Masukan Gambar</label><br>
                              <div class="input-group mb-3 col-md-12">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">Upload</span>
                                  </div>
                                  <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="input_picture"
                                        name="input_picture">
                                    <label class="custom-file-label" for="input_picture">Pilih Gambar</label>
                                  </div>
                              </div>
                          </div>
                        <button class="btn btn-primary col-lg-12" type="submit">Simpan</button>
                    </div>
              </form>
          </div>
        </div>
    </div>
</div>

@endsection