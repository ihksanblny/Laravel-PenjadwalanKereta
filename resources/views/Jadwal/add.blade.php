@extends('layout.dashboard')

@section('content')
<div class="container mt-7">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Entri Jadwal Kereta</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('jadwal.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="kode_tiket" class="col-md-4 col-form-label text-md-right">Kode Tiket</label>

                            <div class="col-md-6">
                                <input id="kode_tiket" type="text" class="form-control @error('kode_tiket') is-invalid @enderror" name="kode_tiket" placeholder="Masukkan Kode Tiket" value="{{ old('kode_tiket') }}" required autofocus>

                                @error('kode_tiket')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nama_kereta" class="col-md-4 col-form-label text-md-right">Nama Kereta</label>

                            <div class="col-md-6">
                                <input id="nama_kereta" type="text" class="form-control @error('nama_kereta') is-invalid @enderror" name="nama_kereta" placeholder="Masukkan Nama Kereta" value="{{ old('nama_kereta') }}" required>

                                @error('nama_kereta')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Tambahkan elemen form untuk setiap field pada tabel jadwal -->
                        <!-- Contoh: Field untuk kelas -->
                        <div class="form-group row">
                            <label for="kelas" class="col-md-4 col-form-label text-md-right">Kelas</label>

                            <div class="col-md-6">
                                <input id="kelas" type="text" class="form-control @error('kelas') is-invalid @enderror" name="kelas" placeholder="Masukkan Kelas" value="{{ old('kelas') }}" required>

                                @error('kelas')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Tambahkan elemen form untuk setiap field pada tabel jadwal -->
                        <!-- Contoh: Field untuk tujuan -->
                        <div class="form-group row">
                            <label for="tujuan" class="col-md-4 col-form-label text-md-right">Tujuan</label>

                            <div class="col-md-6">
                                <input id="tujuan" type="text" class="form-control @error('tujuan') is-invalid @enderror" name="tujuan" placeholder="Masukkan Tujuan" value="{{ old('tujuan') }}" required>

                                @error('tujuan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Tambahkan elemen form untuk setiap field pada tabel jadwal -->
                        <!-- Contoh: Field untuk keberangkatan -->
                        <div class="form-group row">
                            <label for="keberangkatan" class="col-md-4 col-form-label text-md-right">Keberangkatan</label>

                            <div class="col-md-6">
                                <input id="keberangkatan" type="text" class="form-control @error('keberangkatan') is-invalid @enderror" name="keberangkatan" placeholder="Masukkan Keberangkatan" value="{{ old('keberangkatan') }}" required>

                                @error('keberangkatan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Tambahkan elemen form untuk setiap field pada tabel jadwal -->
                        <!-- Contoh: Field untuk tanggal -->
                        <div class="form-group row">
                            <label for="tanggal" class="col-md-4 col-form-label text-md-right">Tanggal</label>

                            <div class="col-md-6">
                                <input id="tanggal" type="date" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" placeholder="Pilih Tanggal" value="{{ old('tanggal') }}" required>

                                @error('tanggal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Tambahkan elemen form untuk setiap field pada tabel jadwal -->
                        <!-- Contoh: Field untuk jam -->
                        <div class="form-group row">
                            <label for="jam" class="col-md-4 col-form-label text-md-right">Jam</label>

                            <div class="col-md-6">
                                <input id="jam" type="time" class="form-control @error('jam') is-invalid @enderror" name="jam" placeholder="Pilih Jam" value="{{ old('jam') }}" required>

                                @error('jam')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Simpan
                                </button>
                                <a href="{{ route('jadwal.index') }}" class="btn btn-secondary">
                                    Batal
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
