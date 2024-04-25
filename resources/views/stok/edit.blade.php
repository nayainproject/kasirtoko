@extends('layouts.main', ['title' => 'Produk'])
@section('title-content')
<i class="fas fa-box-open mr-2"></i>
Produk
@endsection

@section('content')
<div class="row">
    <div class="col-xl-4 col-lg-6">
        <form method="POST" class="card card-orange card-outline"
        action="{{ route('stok.update',[
            'stok'=>$stok->id
            ]) }}">
            <div class="card-header">
                <h3 class="card-title">Ubah Stok</h3>
            </div>

            <div class="card-body">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Nama Produk</label>
                    <x-input name="nama_suplier" type="text" :value="$stok->nama_suplier"/>
                </div>
                <div class="form-group">
                    <label>Jumlah</label>
                    <x-input name="jumlah" type="text" :value="$stok->jumlah"/>
                </div>
                <div class="form-group">
                    <label>Nama Suplier</label>
                    <x-input name="nama_suplier" type="text" :value="$stok->nama_suplier"/>
                </div>
            </div>

            <div class="card-footer form-inline">
                <button type="submit" class="btn btn-primary">
                    Update stok
                </button>
                <a href="{{ route('stok.index') }}" class="btn btn-secondary ml-auto">
                    Batal
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
