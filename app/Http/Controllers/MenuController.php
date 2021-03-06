<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kuah;
use App\Models\Menu;
use Auth;

class MenuController extends Controller
{
    public function show()
    {
        $menu = Menu::all();
        $kuah = Kuah::all();
        if (Auth::user()->role == 'admin') {
            return view('admin.menu', compact('menu', 'kuah'));
        } else if (Auth::user()->role == 'kasir') {
            return view('kasir.menu', compact('menu', 'kuah'));
        }
    }

    public function create()
    {
    }

    public function storeMenu(Request $req)
    {
        $req->validate([
            'kategori' => 'required',
            'nama' => 'required',
            'harga' => 'required',
        ]);

        Menu::create([
            'kategori' => $req->kategori,
            'nama' => $req->nama,
            'harga' => $req->harga
        ]);

        return redirect()->back();
    }

    public function storeKuah(Request $req)
    {
        $req->validate([
            'nama' => 'required',
        ]);

        Kuah::create([
            'nama' => $req->nama
        ]);
    }

    public function editMenu($id)
    {
        $menu = Menu::findOrFail($id);
    }

    public function editKuah($id)
    {
        $kuah = Kuah::findOrFail($id);
    }

    public function updateMenu(Request $req, $id)
    {
        $menu = Menu::findOrFail($id);
        $menu->kategori = $req->kategori;
        $menu->nama = $req->nama;
        $menu->harga = $req->harga;
        $menu->save();

        return redirect()->back();
    }

    public function updateKuah(Request $req, $id)
    {
        $kuah = Kuah::findOrFail($id);
        $kuah->nama = $req->nama;
        $kuah->save();
    }

    public function destroyMenu($id)
    {
        Menu::findOrFail($id)->delete();
        return redirect()->back();
    }

    public function destroyKuah($id)
    {
        Kuah::findOrFail($id)->delete();
    }
}
