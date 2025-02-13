@extends('admin.layout.appadmin')
@section('content')

<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-edit"></i> Data Tipe Barang</h1>
            <p>Tambah Tipe Barang</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item">Data Tipe Barang</li>
            <li class="breadcrumb-item"><a href="#">Tambah Tipe Barang</a></li>
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
                <h3 class="tile-title">Tambah Tipe Barang</h3>
                <div class="tile-body">
                    <form method="POST" action="{{ route('type.store') }}">
                        @csrf
                        <div class="form-group">
                            <label class="control-label">Nama Tipe Barang</label>
                            <input class="form-control" name="nama_type" type="text" placeholder="Nama Tipe Barang" required>
                        </div>
                        <div class="tile-footer">
                            <button class="btn btn-primary" type="submit">
                                <i class="fa fa-fw fa-lg fa-check-circle"></i> Simpan
                            </button>
                            <a class="btn btn-secondary" href="{{ route('type.index') }}">
                                <i class="fa fa-fw fa-lg fa-times-circle"></i> Batal
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
