@extends('layout.dashboard')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Daftar Jadwal Kereta</h5>
                </div>
                <div class="card-body">
                    <a href="{{ route('jadwal.create') }}" class="btn btn-primary mb-3">Tambah Jadwal</a>
                    <a href="{{ route('jadwal.report.pdf') }}" class="btn btn-success mb-3">Laporan PDF</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Kode Tiket</th>
                                <th scope="col">Nama Kereta</th>
                                <th scope="col">Kelas</th>
                                <th scope="col">Tujuan</th>
                                <th scope="col">Keberangkatan</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Jam</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($jadwals as $jadwal)
                            <tr>
                                <td>{{ $jadwal->id_jadwal }}</td>
                                <td>{{ $jadwal->kode_tiket }}</td>
                                <td>{{ $jadwal->nama_kereta }}</td>
                                <td>{{ $jadwal->kelas }}</td>
                                <td>{{ $jadwal->tujuan }}</td>
                                <td>{{ $jadwal->keberangkatan }}</td>
                                <td>{{ $jadwal->tanggal }}</td>
                                <td>{{ $jadwal->jam }}</td>
                                <td>
                                    <a href="{{ route('jadwal.edit', $jadwal->id_jadwal) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <form action="{{ route('jadwal.destroy', $jadwal->id_jadwal) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</button>
                                    </form>
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
@endsection
