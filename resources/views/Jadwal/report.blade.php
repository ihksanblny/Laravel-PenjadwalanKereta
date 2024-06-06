<!DOCTYPE html>
<html>
<head>
    <title>Laporan Jadwal Kereta</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Laporan Jadwal Kereta</h2>
    <table>
        <thead>
            <tr>
                <th>Kode Tiket</th>
                <th>Nama Kereta</th>
                <th>Kelas</th>
                <th>Tujuan</th>
                <th>Keberangkatan</th>
                <th>Tanggal</th>
                <th>Jam</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jadwals as $jadwal)
                <tr>
                    <td>{{ $jadwal->kode_tiket }}</td>
                    <td>{{ $jadwal->nama_kereta }}</td>
                    <td>{{ $jadwal->kelas }}</td>
                    <td>{{ $jadwal->tujuan }}</td>
                    <td>{{ $jadwal->keberangkatan }}</td>
                    <td>{{ $jadwal->tanggal }}</td>
                    <td>{{ $jadwal->jam }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
