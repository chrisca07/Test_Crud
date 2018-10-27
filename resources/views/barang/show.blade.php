@extends('layouts.app')

@section('content')
<h4>{{ $barang->barang }}</h4>
<p>{{ $barang->harga }}</p>
<a href="{{ route('barang.index') }}" class="btn btn-default">Kembali</a>
@endsection