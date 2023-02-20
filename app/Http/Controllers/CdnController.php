<?php

namespace App\Http\Controllers;

use App\Models\Cdn;
use Illuminate\Http\Request;

class CdnController extends Controller
{
    public function index(Cdn $cdn)
    {
        return response()->json([
            'data' => $cdn
        ]);
    }

    public function list()
    {

    }
    public function create(Request $request)
    {
        Cdn::create($request->all());

        return true;
    }

    public function update(Cdn $cdn, Request $request)
    {
        Cdn::whereId($cdn->id)->update($request->all());

        return true;
    }

    public function delete(Cdn $cdn)
    {
        Cdn::where('id', $cdn->id)->delete();
        return true;
    }
}
