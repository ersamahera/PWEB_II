<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\song;
use Illuminate\Support\Facades\Validator;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_song = song::all();

        return view('dashboard', compact(
            'data_song'
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $model = new song;
        return view('song.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            'judul_lagu' => 'required',
            'penyanyi' => 'required',
            'tahun_rilis' => 'required',
        ]);
        if ($validator->fails()) {
            return back()->withInput($request->all())->withErrors(['msg' => 'Gagal input data']);
        } else {
            $song = new song([
                'judul_lagu' => $request->judul_lagu,
                'penyanyi' => $request->penyanyi,
                'tahun_rilis' => $request->tahun_rilis,
            ]);
            $song->save();
            return back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $song = song::findorfail($id);
        if ($song) {
            $data = [
                'judul_lagu' => $request->judul_lagu,
                'penyanyi' => $request->penyanyi,
                'tahun_rilis' => $request->tahun_rilis
            ];
        } else {
            return back()->withErrors(['msg' => 'Gagal update data']);
        }
        $song->update($data);
        return back()->with('toast_success', 'song berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
