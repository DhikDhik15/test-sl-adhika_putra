<div class="mb-3">
    <label for="name" class="form-label">Nama</label>
    <input type="text" name="name" class="form-control" value="{{ old('name', $employee->name ?? '') }}" required>
</div>

<div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" value="{{ old('email', $employee->email ?? '') }}" required>
</div>

<div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" value="{{ old('password', $employee->password ?? '') }}"
        required>
</div>

<div class="mb-3">
    <label for="position" class="form-label">Jabatan</label>
    <select name="position_id" id="position" class="form-select" required>
        <option value="">-- Pilih Jabatan --</option>
        @foreach ($positions as $position)
        <option value="{{ $position->id }}" {{ old('position', $employee->position_id ?? '') == $position->id ?
            'selected' : '' }}>
            {{ $position->name }}
        </option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label for="division" class="form-label">Divisi</label>
    <select name="department_id" id="division" class="form-select" required>
        <option value="">-- Pilih Divisi --</option>
        @foreach ($divisions as $division)
        <option value="{{ $division->id }}" {{ old('division', $employee->department_id ?? '') == $division->id ?
            'selected' : '' }}>
            {{ $division->name }}
        </option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label for="hire_date" class="form-label">Tanggal Masuk</label>
    <input type="date" name="hire_date" class="form-control" value="{{ old('hire_date', $employee->hire_date ?? '') }}"
        required>
</div>
