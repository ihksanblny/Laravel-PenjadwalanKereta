<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;
use PDF;

class JadwalController extends Controller
{
    public function index()
    {
        $jadwals = Jadwal::all();
        return view('Jadwal.jadwal-kereta', compact('jadwals'));
    }

    public function create()
    {
        return view('Jadwal.add');
    }

    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            // Sesuaikan dengan aturan validasi yang diperlukan
            'kode_tiket' => 'required|unique:jadwals',
            'nama_kereta' => 'required',
            'kelas' => 'required',
            'tujuan' => 'required',
            'keberangkatan' => 'required',
            'tanggal' => 'required',
            'jam' => 'required',
        ]);

        // Buat record baru dalam database
        Jadwal::create($request->all());

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('jadwal.index')->with('success', 'Jadwal kereta berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $jadwal = Jadwal::where('id_jadwal', $id)->firstOrFail();
        return view('jadwal.edit', compact('jadwal'));
    }


    public function update(Request $request, $id)
    {
        // Validasi data
        $request->validate([
            // Sesuaikan dengan aturan validasi yang diperlukan
            'kode_tiket' => 'required|unique:jadwals,kode_tiket,' . $id . ',id_jadwal',
            'nama_kereta' => 'required',
            'kelas' => 'required',
            'tujuan' => 'required',
            'keberangkatan' => 'required',
            'tanggal' => 'required',
            'jam' => 'required',
        ]);

        // Temukan record yang akan diperbarui dan lakukan perubahan
        $jadwal = Jadwal::findOrFail($id);
        $jadwal->update($request->all());

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('jadwal.index')->with('success', 'Jadwal kereta berhasil diperbarui.');
    }

    public function destroy($id)
    {
        // Temukan dan hapus record yang dipilih
        $jadwal = Jadwal::findOrFail($id);
        $jadwal->delete();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('jadwal.index')->with('success', 'Jadwal kereta berhasil dihapus.');
    }

    public function generatePDF()
    {
        $jadwals = Jadwal::all();
        $pdf = PDF::loadView('Jadwal.report', compact('jadwals'));

        return $pdf->download('laporan_jadwal.pdf');
    }
}
