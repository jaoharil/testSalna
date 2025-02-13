@extends('admin.layout.appadmin')
@section('content')

<!-- Modal Tambah Type -->
<div class="modal fade" id="addTypeModal" tabindex="-1" role="dialog" aria-labelledby="addTypeModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addTypeModalLabel">Tambah Tipe Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('type.store') }}" method="POST">
        <div class="modal-body">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="nama_type">Nama Type</label>
            <input type="text" class="form-control" id="nama_type" name="nama_type" placeholder="Nama Type Barang" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
      </form>
    </div>
  </div>
</div>

<main class="app-content">
  <div class="app-title">
    <div class="container pt-4 px-4">
      <div class="row g-4">
        <div class="col-12">
          <div class="bg-light rounded h-100 p-4">
            <h1 class="fw-bold">Data Type Barang</h1>

            <div class="d-flex justify-content-end mb-2">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addTypeModal">
                <i class="fa fa-plus"></i> Tambah Tipe Barang
              </button>
            </div>

            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Type</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @php $no = 1; @endphp
                  @foreach ($types as $type)
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $type->nama_type }}</td>
                    <td class="d-flex">
                      <a href="{{ route('type.edit', $type->id) }}" class="btn btn-sm btn-warning mr-2">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                      </a>
                      <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteModal{{ $type->id }}">
                        <i class="fa fa-trash" aria-hidden="true"></i> Hapus
                      </button>

                      <!-- Modal Hapus -->
                      <div class="modal fade" id="deleteModal{{ $type->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="deleteModalLabel">Hapus Data Type</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              Apakah anda yakin ingin menghapus tipe barang <strong>{{ $type->nama_type }}</strong>?
                            </div>
                            <div class="modal-footer">
                              <form action="{{ route('type.destroy', $type->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
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
        </div>
      </div>
    </div>
  </div>
</main>

@endsection
