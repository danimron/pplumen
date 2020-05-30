<?php

namespace App\Http\Controllers;

use App\Calon;

use Illuminate\Http\Request;

class CalonController extends Controller
{
    public function index()
    {
        $calon = Calon::all();
        return response()->json($calon);
    }

    public function show($id)
    {
        $calon = Calon::find($id);
        return response()->json($calon);
    }

    public function vote(Request $request, $id)
    {
        $calon = Calon::find($id);

        if (!$calon) {
            return response()->json(['message' => 'akun not found'], 404);
        }

        $this->validate($request, [
            'votes' => 'integer'
        ]);

        $data = $request->all();
        $calon->fill($data);
        $calon["votes"] = $calon["votes"] + 1;
        $calon->save();
        return response()->json(['message' => 'berhasil vote']);
    }
}
