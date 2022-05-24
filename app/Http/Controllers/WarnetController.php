<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Warnet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\isEmpty;

class WarnetController extends Controller
{
    // untuk menampilkan data pasien
    public function index()
    {
        session_start();
        $Warnet = Warnet::all();
        return view('Warnet.index', ['Warnet' => $Warnet]);
    }

    // create table atau membuat table
    public function create()
    {
        return view('Warnet.create');
    }

    // untuk menyimpan Warnet
    public function store(request $request)
    {

        //    dd($request->except(['_token','submit']));
        Warnet::create($request->except(['_token', 'submit']));

        return redirect('/Warnet');

    }

    // untuk edit Warnet
    public function edit($id)
    {
        $Warnet = Warnet::find($id);
        return view('Warnet.edit', compact(['Warnet']));
    }


    // untuk update Warnet
    public function update($id, Request $request)
    {
        $Warnet = Warnet::find($id);
        $Warnet->update($request->except(['_token', 'submit']));
        return redirect('/Warnet');
    }

    // untuk menghapus Warnet
    public function destroy($id)
    {
        $Warnet = Warnet::find($id);
        $Warnet->delete();
        return redirect('/Warnet');
    }




}
