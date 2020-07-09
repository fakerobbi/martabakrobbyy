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
            <a href="{{ route('admin.gallery.index') }}">Gallery</a>
          </li>
          <li class="breadcrumb-item active">Ubah</li>
        </ol>
        <!-- Example DataTables Card-->
        <div class="card mb-3">
          <div class="card-header">
            <h4>Ubah Daftar Gallery</h4>
          </div>
          <div class="card-body">
              <form enctype="multipart/form-data" class="form-horizontal" action="{{ route('admin.gallery.update',$items->id) }}" method="POST">
                  @method('put')
                  @csrf
                  <div class="row">
                    <div class="form-group col-md-6">
                        <label for="user_id">Admin</label>
                        <select class="form-control" id="user_id" name="user_id">
                            @foreach ($users as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="input_text">Judul Gambar</label>
                        <input type="text" class="form-control" id="picture_name" name="picture_name"
                        value="{{ $items->picture_name }}">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="input_text">Deskripsi</label>
                        <textarea name="description" id="description" class="form-control" cols="60" rows="10"> {{ $items->description }}</textarea>
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
                        <button class="btn btn-primary col-lg-12" type="submit">Ubah</button>
                        <a href="{{ route('admin.gallery.index') }}"
                        class="btn btn-danger col-12 mt-1">Batalkan</a>
                    </div>
              </form>
          </div>
        </div>
    </div>
</div>

@endsection