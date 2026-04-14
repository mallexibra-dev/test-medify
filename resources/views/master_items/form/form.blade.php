<form method="POST" enctype="multipart/form-data">
    @csrf
    @if ($method == 'edit')
        <div class="form-group">
            <label>Kode Barang</label>
            <input type="text" class="form-control" name="kode_barang" required readonly value="{{ $item->kode ?? '' }}">
        </div>
    @endif

    <div class="form-group">
        <label>Nama</label>
        <input type="text" class="form-control" name="nama" required value="{{ $item->nama ?? '' }}" placeholder="Masukkan nama barang">
    </div>

    <div class="form-group">
        <label>Harga Beli</label>
        <input type="number" class="form-control" name="harga_beli" required value="{{ $item->harga_beli ?? '' }}" placeholder="Contoh: 50000">
    </div>

    <div class="form-group">
        <label>Laba (dalam persen)</label>
        <input type="number" class="form-control" name="laba" required value="{{ $item->laba ?? '' }}" placeholder="Contoh: 20">
    </div>

    @php $selected = $item->supplier ?? ''; @endphp
    <div class="form-group">
        <label>Supplier</label>
        <select class="form-control" required name="supplier">
            <option @if ($selected == '') selected @endif value="">--Pilih Supplier--</option>
            <option @if ($selected == 'Tokopaedi') selected @endif>Tokopaedi</option>
            <option @if ($selected == 'Bukulapuk') selected @endif>Bukulapuk</option>
            <option @if ($selected == 'TokoBagas') selected @endif>TokoBagas</option>
            <option @if ($selected == 'E Commurz') selected @endif>E Commurz</option>
            <option @if ($selected == 'Blublu') selected @endif>Blublu</option>
        </select>
    </div>

    @php $selected = $item->jenis ?? ''; @endphp
    <div class="form-group">
        <label>Jenis</label>
        <select class="form-control" required name="jenis">
            <option @if ($selected == '') selected @endif value="">--Pilih Jenis--</option>
            <option @if ($selected == 'Obat') selected @endif>Obat</option>
            <option @if ($selected == 'Alkes') selected @endif>Alkes</option>
            <option @if ($selected == 'Matkes') selected @endif>Matkes</option>
            <option @if ($selected == 'Umum') selected @endif>Umum</option>
            <option @if ($selected == 'ATK') selected @endif>ATK</option>
        </select>
    </div>

    <div class="form-group">
        <label>Kategori</label>
        <select class="form-control" multiple name="kategori[]">
            @foreach ($kategori_list as $kategori)
                <option value="{{ $kategori->id }}" @if (in_array($kategori->id, $selected_kategori)) selected @endif>
                    {{ $kategori->nama }}
                </option>
            @endforeach
        </select>
        <small class="text-muted">Tahan Ctrl/Cmd untuk pilih lebih dari satu</small>
    </div>

    <div class="form-group">
        <label for="photo">Foto Produk</label>
        <input type="file" class="form-control" name="photo" accept="image/*">
        @if ($method == 'edit' && $item->photo)
            <div class="mt-2">
                <small class="text-muted">Foto saat ini: {{ $item->photo }}</small>
                <br>
                <img src="{{ asset('storage/' . $item->photo) }}" width="100" height="100" class="mt-1 rounded" style="object-fit: cover;">
            </div>
        @endif
    </div>

    <button class="btn btn-primary mt-3">Submit</button>

</form>
