<?php

namespace App\Http\Controllers;

use App\Pengguna;

use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function index()
    {
        $pengguna = Pengguna::all();
        return response()->json($pengguna);
    }

    public function show($id)
    {
        $pengguna = Pengguna::find($id);
        return response()->json($pengguna);
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'npm' => 'required|integer',
            // 'nama' => 'required|string',
            'password' => 'required|string'
        ]);
        
        $data = $request->all();
        $pengguna = Pengguna::create($data);

        return response()->json($pengguna);
    }

    public function update(Request $request, $id)
    {
        $pengguna = Pengguna::find($id);

        if (!$pengguna) {
            return response()->json(['message' => 'pengguna not found'], 404);
        }

        $this->validate($request, [
            'npm' => 'integer',
            // 'nama' => 'string',
            'password' => 'string'
        ]);

        $data = $request->all();

        $pengguna->fill($data);

        $pengguna->save();
        return response()->json($pengguna);
    }

    public function destroy($id)
    {
        $pengguna = Pengguna::find($id);

        if (!$pengguna) {
            return response()->json(['message' => 'pengguna not found'], 404);
        }

        $pengguna->delete();
        return response()->json(['message' => 'pengguna deleted']);
    }
}
