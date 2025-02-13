@extends('admin.layout.appadmin')
@section('content')

<!-- Modal -->
<div class="modal fade" id="uploadFileModal" tabindex="-1" role="dialog" aria-labelledby="uploadFileModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="uploadFileModalLabel">Upload File</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ url('admin/barang/import') }}" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="form-group">
            {{ csrf_field() }}
            <input type="file" name="file" class="form-control">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Upload</button>
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
            <h1 class="fw-bold">Data Barang</h1>

            <div class="d-flex justify-content-end mb-2">
              <a href="{{ route('barang.create') }}" class="btn btn-primary">
                <i class="fa fa-plus"></i> Tambah Barang
              </a>
              <button type="button" class="btn btn-info ml-2" data-toggle="modal" data-target="#uploadFileModal">
                <i class="fas fa-upload"></i> Upload File
              </button>
            </div>

            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Tipe Barang</th>
                    <th scope="col">Harga Sewa</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @php $no = 1; @endphp
                  @foreach ($barangs as $barang)
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $barang->nama_barang }}</td>
                    <td>{{ $barang->type->nama_type }}</td>
                    <td>{{ number_format($barang->harga_sewa, 2) }}</td>
                    <td>{{ $barang->deskripsi }}</td>
                    <td>
                      @if($barang->foto)
                      <img src="{{ asset('storage/' . $barang->foto) }}" alt="{{ $barang->nama_barang }}" width="100px">
                      @else
                        Tidak ada foto
                      @endif
                    </td>
                    <td class="d-flex">
                      <a href="{{ route('barang.edit', $barang->id) }}" class="btn btn-sm btn-warning mr-2">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                      </a>
                      <a href="{{ route('barang.show', $barang->id) }}" class="btn btn-sm btn-info mr-2">
                        <i class="fa fa-eye" aria-hidden="true"></i> Lihat
                      </a>
                      <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteModal{{$barang->id}}">
                        <i class="fa fa-trash" aria-hidden="true"></i> Hapus
                      </button>

                      <!-- Modal Hapus -->
                      <div class="modal fade" id="deleteModal{{$barang->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="deleteModalLabel">Hapus Data Barang</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              Apakah anda yakin ingin menghapus barang <strong>{{ $barang->nama_barang }}</strong>?
                            </div>
                            <div class="modal-footer">
                              <form action="{{ route('barang.destroy', $barang->id) }}" method="POST">
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
