@extends('layouts.app')

@section('content')
<h1>Tambah Pegawai</h1>

@if ($errors->any())
<div class="alert alert-danger">
    <ul class="mb-0">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('employees.store') }}" method="POST">
    @csrf
    @include('employees.form')
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="{{ route('employees.index') }}" class="btn btn-secondary">Batal</a>
</form>
@endsection
