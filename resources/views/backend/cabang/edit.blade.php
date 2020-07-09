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
            <a href="{{ route('admin.cabang.index') }}">Cabang</a>
          </li>
          <li class="breadcrumb-item active">Ubah</li>
        </ol>
        <!-- Example DataTables Card-->
        <div class="card mb-3">
          <div class="card-header">
            <h4>Ubah Daftar Cabang</h4>
          </div>
          <div class="card-body">
              <form enctype="multipart/form-data" class="form-horizontal" action="{{ route('admin.cabang.update',$items->id) }}" method="POST">
                  @method('put')
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
                            <label for="input_text">Nama Cabang</label>
                            <input type="text" class="form-control" id="branch_name" name="branch_name"
                            value="{{ $items->branch_name }}">
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label for="input_text">Penanggung Jawab</label>
                            <input type="text" class="form-control" id="person_in_charge" name="person_in_charge"
                            value="{{ $items->person_in_charge }}">
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label for="input_text">No Telepon</label>
                            <input type="text" class="form-control" id="phone_number" name="phone_number"
                        value="{{ $items->phone_number }}">
                        </div>

                        <div class="form-group col-md-12">
                            <label for="input_text">Alamat</label>
                            <textarea name="address" id="address" class="form-control" cols="60" rows="10">{{ $items->address }}</textarea>
                        </div>
                        
                     
                        <button class="btn btn-primary col-lg-12" type="submit">Ubah</button>
                        <a href="{{ route('admin.cabang.index') }}"
                        class="btn btn-danger col-12 mt-1">Batalkan</a>
                    </div>
              </form>
          </div>
        </div>
    </div>
</div>

@endsection