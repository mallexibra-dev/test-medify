<?php

namespace App\Http\Controllers;

use App\Models\KategoriItem;
use Illuminate\Http\Request;

class KategoriItemsController extends Controller
{
    public function index()
    {
        return view('category_items.index.index');
    }

    public function search(Request $request)
    {
        $kode = $request->kode;
        $nama = $request->nama;

        $data_search = KategoriItem::query();

        if (!empty($kode))
            $data_search = $data_search->where('kode', 'LIKE', '%' . $kode . '%');
        if (!empty($nama))
            $data_search = $data_search->where('nama', 'LIKE', '%' . $nama . '%');

        $data_search = $data_search->select('kode', 'nama')->orderBy('id')->get();

        return json_encode([
            'status' => 200,
            'data' => $data_search
        ]);
    }

    public function singleView($kode)
    {
        $kategori = KategoriItem::where('kode', $kode)->first();
        $items = $kategori->masterItems;

        $data['kategori'] = $kategori;
        $data['items'] = $items;

        return view('category_items.single.index', $data);
    }

    public function formView($method, $id = 0)
    {
        if ($method == 'new') {
            $kategori = [];
        } else {
            $kategori = KategoriItem::find($id);
        }
        $data['kategori'] = $kategori;
        $data['method'] = $method;
        return view('category_items.form.index', $data);
    }

    public function formSubmit(Request $request, $method, $id = 0)
    {
        if ($method == 'new') {
            $data_kategori = new KategoriItem;
            $count = KategoriItem::count('id');
            $count = $count + 1;
            $kode = 'K' . str_pad($count, 4, '0', STR_PAD_LEFT);
        } else {
            $data_kategori = KategoriItem::find($id);
            $kode = $data_kategori->kode;
        }

        $data_kategori->kode = $kode;
        $data_kategori->nama = $request->nama;
        $data_kategori->save();

        return redirect('category-items');
    }

    public function delete($id)
    {
        KategoriItem::find($id)->delete();
        return redirect('category-items');
    }

    public function printPdf($kode)
    {
        $kategori = KategoriItem::where('kode', $kode)->first();
        $items = $kategori->masterItems;

        $data['kategori'] = $kategori;
        $data['items'] = $items;
        $data['waktu_cetak'] = now()->format('d-m-Y H:i:s');

        $pdf = \PDF::loadView('category_items.print', $data);
        return $pdf->download('kategori_' . $kode . '.pdf');
    }
}
