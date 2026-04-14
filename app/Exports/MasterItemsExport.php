<?php

namespace App\Exports;

use App\Models\MasterItem;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class MasterItemsExport implements FromCollection, WithHeadings, WithMapping
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return MasterItem::with('kategoriItems')->get();
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            'Kode',
            'Nama Kategori',
            'Nama Items',
            'Nama Supplier',
            'Harga',
            'Laba',
            'Harga Jual',
        ];
    }

    /**
     * @param MasterItem $item
     * @return array
     */
    public function map($item): array
    {
        $kategoriNames = $item->kategoriItems->pluck('nama')->implode(', ');
        $labaNominal = $item->harga_beli * $item->laba / 100;
        $hargaJual = $item->harga_beli + $labaNominal;

        return [
            $item->kode,
            $kategoriNames ?: '-',
            $item->nama,
            $item->supplier,
            $item->harga_beli,
            round($labaNominal),
            round($hargaJual),
        ];
    }
}
