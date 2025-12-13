<?php

namespace App\Http\Controllers;

use App\Models\inventaris;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index() 
    {
        $inventaris = inventaris::all()->count();
        
        return view('admin.dashboard', compact('inventaris'));
    }


    public function inventaris() 
    {
        $data = inventaris::all();
        
        return view('admin.inventaris', compact('data'));
    }

    

    public function store(Request $request)
    {
        $request->validate([
            'nama_inventaris' => 'required',
            'kode_inventaris' => 'required|unique:tbl_inventaris',
            'harga' => 'required',
            'tanggal' => 'required',
            'ruangan' => 'required',
            'keterangan' => 'required'
        ]);

        inventaris::create($request->all());

        return redirect()->back()->with('success','Data inventaris berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_inventaris' => 'required',
            'kode_inventaris' => 'required|unique:tbl_inventaris,kode_inventaris,' . $id,
            'harga' => 'required',
            'tanggal' => 'required',
            'ruangan' => 'required',
            'keterangan' => 'required'
        ]);

        inventaris::findOrFail($id)->update($request->all());

        return redirect()->back()->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        Inventaris::findOrFail($id)->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }

    

}
