<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Detail Kategori - {{ $kategori->nama }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            margin: 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
            border-bottom: 2px solid #333;
            padding-bottom: 10px;
        }
        .header h1 {
            margin: 0;
            font-size: 20px;
        }
        .info-table {
            margin-bottom: 30px;
        }
        .info-table td {
            padding: 5px;
        }
        .info-table th {
            text-align: left;
            width: 150px;
        }
        table.items {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 50px;
        }
        table.items th {
            background-color: #f0f0f0;
            border: 1px solid #333;
            padding: 10px;
            text-align: left;
        }
        table.items td {
            border: 1px solid #333;
            padding: 8px;
        }
        .footer {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            text-align: center;
            font-size: 10px;
            color: #666;
            border-top: 1px solid #ccc;
            padding-top: 10px;
        }
        .no-data {
            text-align: center;
            padding: 20px;
            font-style: italic;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Detail Kategori</h1>
    </div>

    <table class="info-table">
        <tr>
            <th>Kode Kategori</th>
            <td>: {{ $kategori->kode }}</td>
        </tr>
        <tr>
            <th>Nama Kategori</th>
            <td>: {{ $kategori->nama }}</td>
        </tr>
    </table>

    <h3>Item yang memiliki kategori ini</h3>

    @if($items->count() > 0)
        <table class="items">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Item</th>
                    <th>Nama Item</th>
                    <th>Jenis</th>
                    <th>Harga Beli</th>
                    <th>Laba</th>
                    <th>Supplier</th>
                </tr>
            </thead>
            <tbody>
                @foreach($items as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->kode }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->jenis }}</td>
                    <td>{{ number_format($item->harga_beli, 0, ',', '.') }}</td>
                    <td>{{ number_format($item->harga_beli * $item->laba / 100, 0, ',', '.') }}</td>
                    <td>{{ $item->supplier }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p class="no-data">Tidak ada item dengan kategori ini.</p>
    @endif

    <div class="footer">
        Dicetak pada: {{ $waktu_cetak }}
    </div>
</body>
</html>
