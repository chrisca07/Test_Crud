@extends('layouts.app')

@section('content')
<h4>Ubah Barang</h4>
<form action="{{ route('barang.update', $barang->id) }}" method="post">
    {{csrf_field()}}
    {{ method_field('PUT') }}
    <div class="form-group {{ $errors->has('barang') ? 'has-error' : '' }}">
        <label for="title" class="control-label">Nama Barang</label>
        <input type="text" class="form-control" name="barang" placeholder="Nama Barang" value="{{ $barang->barang }}">
        @if ($errors->has('barang'))
            <span class="help-block">{{ $errors->first('barang') }}</span>
        @endif
    </div>
    <div class="form-group {{ $errors->has('harga') ? 'has-error' : '' }}">
        <label for="content" class="control-label">Harga</label>
        <input type="text" class="form-control" name="harga" placeholder="harga" value="{{ $barang->harga }}">
        @if ($errors->has('harga'))
            <span class="help-block">{{ $errors->first('harga') }}</span>
        @endif
    </div>
	<div class="form-group {{ $errors->has('stock') ? 'has-error' : '' }}">
        <label for="content" class="control-label">Stock</label>
        <input type="text" class="form-control" name="stock" placeholder="Stock" value="{{ $barang->stock }}">
        @if ($errors->has('stock'))
            <span class="help-block">{{ $errors->first('stock') }}</span>
        @endif
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-info">Simpan</button>
        <a href="{{ route('barang.index') }}" class="btn btn-default">Kembali</a>
    </div>
</form>
@endsection