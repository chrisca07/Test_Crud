@extends('layouts.app')

@section('content')
    <a href="{{ route('barang.create') }}" class="btn btn-info btn-sm">Artikel Baru</a>
    
    @if ($message = Session::get('message'))
        <div class="alert alert-success martop-sm">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-responsive martop-sm">
        <thead>
            <th>ID</th>
            <th>Nama barang</th>
            <th>harga</th>
			<th>stock</th>
        </thead>
    </table>
@endsection