<?php

namespace App\Http\Controllers;

use App\Models\Bpd;
use Illuminate\Http\Request;

class BpdController extends Controller
{
    public function index(){
        $bpd = Bpd::paginate(5);

        return response()->json(['message' => 'Daftar BPD berhasil diambil', 'bpd' => $bpd]);
    }

    public function showById($id){
        $bpd = Bpd::findOrFail($id);

        return response()->json(['message' => 'Detail BPD berhasil diambil', 'bpd' => $bpd]);
    }

    public function update(Request $request, $id){
        $bpd = Bpd::findOrFail($id);

        $validated = $request->validate([
            'nomor' => 'required',
            'nama_lengkap' => 'required',
            'no_hp' => 'required',
            'latitude' => 'required',
            'longitude' => 'required'
        ]);

        $bpd->update($validated);

        return response()->json(['message' => 'Data BPD berhasil diupdate']);
    }
   
    public function store(Request $request){
        $validated = $request->validate([
            'nomor' => 'required',
            'nama_lengkap' => 'required',
            'no_hp' => 'required',
            'latitude' => 'required',
            'longitude' => 'required'
        ]);

        Bpd::create($validated);

        return response()->json(['message' => 'Data BPD berhasil ditambahkan']);
    }

    public function delete($id){
        $bpd = Bpd::findOrFail($id);

        $bpd->delete();

        return response()->json(['message' => 'Data BPD berhasil dihapus']);
    }
}
