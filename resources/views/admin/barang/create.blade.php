@extends('admin.layout.appadmin')
@section('content')

<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-edit"></i> Data Barang</h1>
            <p>Tambah Data Barang</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item">Data Barang</li>
            <li class="breadcrumb-item"><a href="#">Tambah Data Barang</a></li>
        </ul>
    </div>

    @if ($errors->any())
    <div class="col-md-12 my-2">
        @foreach ($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible fade show">
            <span class="badge badge-danger">Error</span> {{ $error }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endforeach
    </div>
    @endif

    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Tambah Data Barang</h3>
                <div class="tile-body">
                    <form method="POST" action="{{ route('barang.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="control-label">Nama Barang</label>
                            <input class="form-control" name="nama_barang" type="text" placeholder="Nama Barang">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Tipe Barang</label>
                            <select class="form-control" name="id_type">
                                @foreach ($types as $type)
                                    <option value="{{ $type->id }}">{{ $type->nama_type }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Harga Sewa</label>
                            <input class="form-control" name="harga_sewa" type="number" placeholder="Harga Sewa">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Deskripsi</label>
                            <textarea class="form-control" name="deskripsi" placeholder="Deskripsi Barang"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Foto Barang</label>
                            <input class="form-control" name="foto" type="file">
                        </div>
                        <div class="tile-footer">
                            <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i> Simpan</button>
                            <a class="btn btn-secondary" href="{{ url('admin/barang') }}"><i class="fa fa-fw fa-lg fa-times-circle"></i> Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Essential javascripts for application to work -->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script src="js/plugins/pace.min.js"></script>

@endsection
