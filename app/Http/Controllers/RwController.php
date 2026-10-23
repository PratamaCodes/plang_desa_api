<?php

namespace App\Http\Controllers;

use App\Models\Rw;
use Illuminate\Http\Request;

class RwController extends Controller
{
    public function index(){
        $rw = Rw::paginate(5);

        return response()->json(['message' => 'Daftar BPD berhasil diambil', 'rw' => $rw]);
    }

    public function showById($id){
        $rw = Rw::findOrFail($id);

        return response()->json(['message' => 'Detail RW berhasil diambil', 'rw' => $rw]);
    }

    public function update(Request $request, $id){
        $rw = Rw::findOrFail($id);

        $validated = $request->validate([
            'bpd_id' => 'required',
            'nomor' => 'required',
            'nama_lengkap' => 'required',
            'no_hp' => 'required',
            'latitude' => 'required',
            'longitude' => 'required'
        ]);

        $rw->update($validated);

        return response()->json(['message' => 'Data RW berhasil diupdate']);
    }

    public function store(Request $request){
        $validated = $request->validate([
            'bpd_id' => 'required',
            'nomor' => 'required',
            'nama_lengkap' => 'required',
            'no_hp' => 'required',
            'latitude' => 'required',
            'longitude' => 'required'
        ]);

        Rw::create($validated);

        return response()->json(['message' => 'Data RW berhasil ditambahkan']);
    }

    public function delete($id){
        $rw = Rw::findOrFail($id);

        $rw->delete();

        return response()->json(['message' => 'Data RW berhasil dihapus']);
    }
}
