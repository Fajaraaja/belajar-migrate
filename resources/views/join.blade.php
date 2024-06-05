<!DOCTYPE html>
<html>
<head>
    <title>Halaman Join</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Mahasiswa List</h1>
        <a href="/home" class="btn btn-success">Balik ke Home</a>
        <br>
        <br>
            <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>IPK</th>
                            <th>Nama Jurusan</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($mahasiswa2 as $user)
                            <tr>
                                <td>{{ $user->nim }}</td>
                                <td>{{ $user->nama }}</td>
                                <td>{{ $user->ipk }}</td>
                                @if(isset($user->jurusan_nama))
                                <td>{{ $user->jurusan_nama }}</td>
                                @else
                                <td>-</td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </div>
</body>
</html>
