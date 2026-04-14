<div id="filter-container">
    <h4>Filter</h4>
    <div class="row">
        <div class="col-4">
            <div class="form-group" id="filter-container">
                <label>Kode</label>
                <input type="text" class="form-control" id="filter-kode" placeholder="Masukkan kode">
            </div>
        </div>
        <div class="col-4">
            <div class="form-group" id="filter-container">
                <label>Nama</label>
                <input type="text" class="form-control" id="filter-nama" placeholder="Masukkan nama">
            </div>
        </div>
        <div class="col-2">
            <div class="form-group" id="filter-container">
                <label>Harga Min</label>
                <input type="number" class="form-control" id="filter-harga-min" placeholder="0">
            </div>
        </div>
        <div class="col-2">
            <div class="form-group" id="filter-container">
                <label>Harga Max</label>
                <input type="number" class="form-control" id="filter-harga-max" placeholder="1000000">
            </div>
        </div>
    </div>
    <button class="btn btn-primary mt-1 btn-get-data">Filter</button>
    <span id="loading-filter" style="display: none;">Loading...</span>
</div>
