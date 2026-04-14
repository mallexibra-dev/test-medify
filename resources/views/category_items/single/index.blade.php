@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form-group mb-2">
                <a href="{{url('category-items')}}" class="btn btn-secondary">Kembali ke Daftar Kategori</a>
            </div>
            <div class="card">
                <div class="card-header">Detail Kategori</div>

                <div class="card-body">
                    <table>
                        <tr>
                            <th>Kode</th>
                            <td>:</td>
                            <td>{{$kategori->kode}}</td>
                        </tr>
                        <tr>
                            <th>Nama</th>
                            <td>:</td>
                            <td>{{$kategori->nama}}</td>
                        </tr>
                    </table>
                    <br>
                    <a class="btn btn-info" href="{{url('category-items/form/edit')}}/{{$kategori->id}}">Edit</a>
                    <a class="btn btn-danger" href="{{url('category-items/delete')}}/{{$kategori->id}}" onclick="return confirm('Are you sure you want to delete this category?');">Delete</a>
                    <a class="btn btn-success" href="{{url('category-items/print')}}/{{$kategori->kode}}" target="_blank">Download PDF</a>
                </div>
            </div>

            <div class="card mt-3">
                <div class="card-header">Items dengan Kategori Ini</div>
                <div class="card-body">
                    @if($items->count() > 0)
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Kode</th>
                                    <th>Nama</th>
                                    <th>Harga Beli</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($items as $item)
                                <tr>
                                    <td>{{$item->kode}}</td>
                                    <td>{{$item->nama}}</td>
                                    <td>{{$item->harga_beli}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <p>Tidak ada item dengan kategori ini.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
