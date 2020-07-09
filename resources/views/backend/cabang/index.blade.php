@extends('backend.template.master')

@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Cabang</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Table Cabang</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Nama Cabang</th>
                  <th>Penanggung Jawab</th>
                  <th>No Telepon</th>
                  <th>Alamat</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($branches as $item)
                      
                  <tr>
                      <td>{{ $item->branch_name }}</td>
                      <td>{{ $item->person_in_charge }}</td>
                      <td>{{ $item->phone_number }}</td>
                      <td>{{ $item->address }}</td>
                      <td class="text-center">
                        <div class="btn-group">
                          <div class="col-md-6 mt-2">
                            <a class="btn btn-warning " href="{{ route('admin.cabang.edit',$item->id) }}">Edit</a>
                          </div>
                          <div class="col-md-6 mt-2">
                            <button class="btn btn-danger" data-toggle="modal" data-id="{{ $item->id }}"
                              data-target="#deleteModal">
                              Delete
                          </button>
                      </div>
                      {{-- </form> --}}
                      <!-- Delete Modal-->
                      <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog"
                          aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Hapus Cabang</h5>
                                      <button class="close" type="button" data-dismiss="modal"
                                          aria-label="Close">
                                          <span aria-hidden="true">×</span>
                                      </button>
                                  </div>
                                  <div class="modal-body">Apakah anda yakin ingin menghapusnya?</div>
                                  <div class="modal-footer">
                                      <button class="btn btn-secondary" type="button"
                                          data-dismiss="modal">Cancel</button>
                                      <form action="{{ route('admin.cabang.destroy',$item->id) }}"
                                          method="POST" class="delete">
                                          @csrf
                                          @method('delete')
                                          <input type="hidden" name="id" id="input-id">
                                          <button class="btn btn-primary btn-delete">Delete</button>
                                      </form>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                          </div>
                        
                        </div>
                        
                     
                      </td>
                    </tr>
                    @endforeach
                   
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->

@endsection