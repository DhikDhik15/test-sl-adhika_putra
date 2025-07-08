@extends('layouts.app')

@section('content')
<h1>Edit Pegawai</h1>

@if ($errors->any())
<div class="alert alert-danger">
    <ul class="mb-0">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('employees.update', $employee) }}" method="POST">
    @csrf
    @method('PUT')
    @include('employees.form', ['employee' => $employee])
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{ route('employees.index') }}" class="btn btn-secondary">Batal</a>
</form>
@endsection
