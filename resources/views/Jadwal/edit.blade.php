@extends('layout.dashboard')

@section('content')
<div class="container mt-7">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Entri Jadwal Kereta</div>

                <div class="card-body">
                <form method="POST" action="{{ route('jadwal.update', $jadwal->id_jadwal) }}">
                        @csrf
                        @method('PUT')

                        <div class="form-group row">
                            <label for="kode_tiket" class="col-md-4 col-form-label text-md-right">Kode Tiket</label>

                            <div class="col-md-6">
                                <input id="kode_tiket" type="text" class="form-control @error('kode_tiket') is-invalid @enderror" name="kode_tiket" value="{{ $jadwal->kode_tiket }}" required autofocus>

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
                                <input id="nama_kereta" type="text" class="form-control @error('nama_kereta') is-invalid @enderror" name="nama_kereta" value="{{ $jadwal->nama_kereta }}" required>

                                @error('nama_kereta')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="kelas" class="col-md-4 col-form-label text-md-right">Kelas</label>

                            <div class="col-md-6">
                                <input id="kelas" type="text" class="form-control @error('kelas') is-invalid @enderror" name="kelas" value="{{ $jadwal->kelas }}" required>

                                @error('kelas')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tujuan" class="col-md-4 col-form-label text-md-right">Tujuan</label>

                            <div class="col-md-6">
                                <input id="tujuan" type="text" class="form-control @error('tujuan') is-invalid @enderror" name="tujuan" value="{{ $jadwal->tujuan }}" required>

                                @error('tujuan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="keberangkatan" class="col-md-4 col-form-label text-md-right">Keberangkatan</label>

                            <div class="col-md-6">
                                <input id="keberangkatan" type="text" class="form-control @error('keberangkatan') is-invalid @enderror" name="keberangkatan" value="{{ $jadwal->keberangkatan }}" required>

                                @error('keberangkatan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tanggal" class="col-md-4 col-form-label text-md-right">Tanggal</label>

                            <div class="col-md-6">
                                <input id="tanggal" type="date" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" value="{{ $jadwal->tanggal }}" required>

                                @error('tanggal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="jam" class="col-md-4 col-form-label text-md-right">Jam</label>

                            <div class="col-md-6">
                                <input id="jam" type="time" class="form-control @error('jam') is-invalid @enderror" name="jam" value="{{ $jadwal->jam }}" required>

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
                                    Simpan Perubahan
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
