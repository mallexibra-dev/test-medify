<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MasterItem;

class MasterItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            [
                'kode' => '00001',
                'nama' => 'Paracetamol 500mg',
                'harga_beli' => 5000,
                'laba' => 20,
                'supplier' => 'Tokopaedi',
                'jenis' => 'Obat',
            ],
            [
                'kode' => '00002',
                'nama' => 'Amoxicillin 500mg',
                'harga_beli' => 8000,
                'laba' => 25,
                'supplier' => 'Bukulapuk',
                'jenis' => 'Obat',
            ],
            [
                'kode' => '00003',
                'nama' => 'Thermometer Digital',
                'harga_beli' => 35000,
                'laba' => 30,
                'supplier' => 'TokoBagas',
                'jenis' => 'Alkes',
            ],
            [
                'kode' => '00004',
                'nama' => 'Masker Medis 3-ply',
                'harga_beli' => 2000,
                'laba' => 50,
                'supplier' => 'E Commurz',
                'jenis' => 'Alkes',
            ],
            [
                'kode' => '00005',
                'nama' => 'Kapas Alkohol',
                'harga_beli' => 15000,
                'laba' => 35,
                'supplier' => 'Tokopaedi',
                'jenis' => 'Matkes',
            ],
            [
                'kode' => '00006',
                'nama' => 'Suntikan Steril 5ml',
                'harga_beli' => 3000,
                'laba' => 40,
                'supplier' => 'Blublu',
                'jenis' => 'Matkes',
            ],
            [
                'kode' => '00007',
                'nama' => 'Vitamin C 1000mg',
                'harga_beli' => 45000,
                'laba' => 25,
                'supplier' => 'Bukulapuk',
                'jenis' => 'Obat',
            ],
            [
                'kode' => '00008',
                'nama' => 'Tensimeter Digital',
                'harga_beli' => 150000,
                'laba' => 20,
                'supplier' => 'TokoBagas',
                'jenis' => 'Alkes',
            ],
            [
                'kode' => '00009',
                'nama' => 'Hand Sanitizer 500ml',
                'harga_beli' => 25000,
                'laba' => 30,
                'supplier' => 'E Commurz',
                'jenis' => 'Umum',
            ],
            [
                'kode' => '00010',
                'nama' => 'Kertas Rekam Medik A4',
                'harga_beli' => 40000,
                'laba' => 15,
                'supplier' => 'Tokopaedi',
                'jenis' => 'ATK',
            ],
            [
                'kode' => '00011',
                'nama' => 'Osrmoxidone 10mg',
                'harga_beli' => 12000,
                'laba' => 22,
                'supplier' => 'Bukulapuk',
                'jenis' => 'Obat',
            ],
            [
                'kode' => '00012',
                'nama' => 'Sarung Tangan Latex',
                'harga_beli' => 50000,
                'laba' => 28,
                'supplier' => 'Blublu',
                'jenis' => 'Matkes',
            ],
            [
                'kode' => '00013',
                'nama' => 'Betadine Antiseptik 30ml',
                'harga_beli' => 18000,
                'laba' => 25,
                'supplier' => 'TokoBagas',
                'jenis' => 'Obat',
            ],
            [
                'kode' => '00014',
                'nama' => 'Plester Luka',
                'harga_beli' => 8000,
                'laba' => 45,
                'supplier' => 'E Commurz',
                'jenis' => 'Matkes',
            ],
            [
                'kode' => '00015',
                'nama' => 'Ballpoint Hitam',
                'harga_beli' => 3000,
                'laba' => 50,
                'supplier' => 'Tokopaedi',
                'jenis' => 'ATK',
            ],
        ];

        foreach ($items as $item) {
            MasterItem::create($item);
        }
    }
}
