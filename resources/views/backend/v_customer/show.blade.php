@extends('backend.v_layouts.app')
@section('content')
    <!-- contentAwal -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">{{ $judul }}</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    
                                </div>
                                <div class="form-group">
                                    <label>Nama Customer</label>
                                    <input type="text" name="nama_customer"
                                        value="{{ old('nama_customer', $show->user->nama) }}"
                                        class="form-control @error('nama_customer') is-invalid @enderror"
                                        placeholder="Masukkan Nama Produk" disabled>
                                    @error('nama_customer')
                                        <span class="invalid-feedback alert-danger" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="email"
                                        value="{{ old('email', $show->user->email) }}"
                                        class="form-control @error('email') is-invalid @enderror"
                                        placeholder="Masukkan Nama Produk" disabled>
                                    @error('email')
                                        <span class="invalid-feedback alert-danger" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>No. Hp</label>
                                    <input type="text" name="hp"
                                        value="{{ old('hp', $show->user->hp) }}"
                                        class="form-control @error('hp') is-invalid @enderror"
                                        disabled>
                                    @error('hp')
                                        <span class="invalid-feedback alert-danger" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input type="text" name="alamat"
                                        value="{{ old('alamat', $show->alamat) }}"
                                        class="form-control @error('alamat') is-invalid @enderror"
                                        disabled>
                                    @error('alamat')
                                        <span class="invalid-feedback alert-danger" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Pos</label>
                                    <input type="text" name="pos"
                                        value="{{ old('pos', $show->pos) }}"
                                        class="form-control @error('pos') is-invalid @enderror"
                                        disabled>
                                    @error('pos')
                                        <span class="invalid-feedback alert-danger" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Foto Utama</label> <br>
                                    <img src="{{ asset('storage/img-customer/' . $show->user->foto) }}" class="foto-preview"
                                        width="100%">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <a href="{{ route('backend.customer.index') }}">
                                <button type="button" class="btn btn-secondary">Kembali</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contentAkhir -->
@endsection
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const fotoContainer = document.getElementById('foto-container');
        const addFotoButton = document.querySelector('.add-foto');
        addFotoButton.addEventListener('click', function () {
            const fotoRow = document.createElement('div');
            fotoRow.classList.add('form-group', 'row');
            fotoRow.innerHTML = `<form action="{{ route('backend.foto_produk.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="col-md-12">
            <input type="hidden" name="produk_id" value="{{ $show->id }}">
            <input type="file" name="foto_produk[]" class="form-control @error('foto_produk') is-invalid @enderror">
            <button type="submit" class="btn btn-success">Simpan</button>
            </div>
            </form>`;
            fotoContainer.appendChild(fotoRow);
        });
    });
</script>