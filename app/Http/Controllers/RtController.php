<?php

namespace App\Http\Controllers;

use App\Models\Rt;
use Illuminate\Http\Request;

class RtController extends Controller
{
    public function index(){
        $rt = Rt::paginate(5);

        return response()->json(['message' => 'Daftar RT berhasil diambil', 'rt' => $rt]);
    }

    public function showById($id){
        $rt = Rt::findOrFail($id);

        return response()->json(['message' => 'Detail RT berhasil diambil', 'rt' => $rt]);
    }

    public function update(Request $request, $id){
        $rt = Rt::findOrFail($id);

        $validated = $request->validate([
            'bpd_id' => 'required',
            'nomor' => 'required',
            'nama_lengkap' => 'required',
            'no_hp' => 'required',
            'latitude' => 'required',
            'longitude' => 'required'
        ]);

        $rt->update($validated);

        return response()->json(['message' => 'Data RT berhasil diupdate']);
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

        Rt::create($validated);

        return response()->json(['message' => 'Data RT berhasil ditambahkan']);
    }

    public function delete($id){
        $rt = Rt::findOrFail($id);

        $rt->delete();

        return response()->json(['message' => 'Data RTberhasil dihapus']);
    }
}
