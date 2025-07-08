<!DOCTYPE html>
<html>

<head>
    <title>Data Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
        <div class="container">
            <a class="navbar-brand" href="{{ route('employees.index') }}">Data Pegawai</a>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>
</body>

</html>
