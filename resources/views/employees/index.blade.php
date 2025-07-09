@extends('layouts.app')

@section('content')

@if (session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<a href="{{ route('employees.create') }}" class="btn btn-primary mb-3">Tambah Pegawai</a>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Jabatan</th>
            <th>Alamat</th>
            <th>Divisi</th>
            <th>Tanggal Masuk</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($employees as $employee)
        <tr>
            <td>{{ $employee->name }}</td>
            <td>{{ $employee->email }}</td>
            <td>{{ $employee->position->name }}</td>
            <td>{{ $employee->address == null ? 'Alamat Kosong' : $employee->address }}</td>
            <td>{{ $employee->division->name }}</td>
            <td>{{ $employee->hire_date }}</td>
            <td>
                <a href="{{ route('employees.edit', $employee) }}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ route('employees.destroy', $employee) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger"
                        onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="6" style="text-align: center">Belum ada data pegawai</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection
