@extends('backend.v_layouts.app')
@section('content')
<!-- contentAwal -->
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <form action="{{ route('backend.customer.update', $edit->user->id) }}" method="post"
                    enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="card-body">
                        <h4 class="card-title"> {{$judul}} </h4>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Foto</label>
                                    {{-- view image --}}
                                    @if ($edit->user->foto)
                                    <img src="{{ asset('storage/img-customer/' . $edit->user->foto) }}" class="foto-preview"
                                        width="100%">
                                    <p></p>
                                    @else
                                    <img src="{{ asset('storage/img-customer/img-default.jpg') }}" class="foto-preview"
                                        width="100%">
                                    <p></p>
                                    @endif
                                    {{-- file foto --}}
                                    <input type="file" name="foto"
                                        class="form-control @error('foto') is-invalid @enderror"
                                        onchange="previewFoto()">
                                    @error('foto')
                                    <div class="invalid-feedback alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="status" class="form-control @error('status') is-invalid @enderror">
                                        <option value="" {{ old('status', $edit->user->status) == '' ? 'selected' : '' }}> -
                                            Pilih Status -</option>
                                        <option value="1" {{ old('status', $edit->user->status) == '1' ? 'selected' : '' }}>
                                            Aktif</option>
                                        <option value="0" {{ old('status', $edit->user->status) == '0' ? 'selected' : '' }}>
                                            NonAktif</option>
                                    </select>
                                    @error('status')
                                    <span class="invalid-feedback alert-danger" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Nama Customer</label>
                                    <input type="text" name="nama"
                                        value="{{ old('nama', $edit->user->nama) }}"
                                        class="form-control @error('nama') is-invalid @enderror"
                                        placeholder="Masukkan Nama Produk">
                                    @error('nama_customer')
                                    <span class="invalid-feedback alert-danger" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="email"
                                        value="{{ old('email', $edit->user->email) }}"
                                        class="form-control @error('email') is-invalid @enderror"
                                        placeholder="Masukkan Nama Produk">
                                    @error('email')
                                    <span class="invalid-feedback alert-danger" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>No. Hp</label>
                                    <input type="text" name="hp"
                                        value="{{ old('hp', $edit->user->hp) }}"
                                        class="form-control @error('hp') is-invalid @enderror">
                                    @error('hp')
                                    <span class="invalid-feedback alert-danger" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input type="text" name="alamat"
                                        value="{{ old('alamat', $edit->alamat) }}"
                                        class="form-control @error('alamat') is-invalid @enderror">
                                    @error('alamat')
                                    <span class="invalid-feedback alert-danger" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Pos</label>
                                    <input type="text" name="pos"
                                        value="{{ old('pos', $edit->pos) }}"
                                        class="form-control @error('pos') is-invalid @enderror">
                                    @error('pos')
                                    <span class="invalid-feedback alert-danger" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="border-top">
                <div class="card-body">
                    <button type="submit" class="btn btn-primary">Perbaharui</button>
                    <a href="{{ route('backend.customer.index') }}">
                        <button type="button" class="btn btn-secondary">Kembali</button>
                    </a>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
</div>
<!-- contentAkhir -->
@endsection