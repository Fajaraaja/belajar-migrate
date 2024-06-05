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
        <a href="/join" class="btn btn-success">Ke Join Table</a>
        <br>
        <br>
            <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>IPK</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($mahasiswa as $user)
                            <tr>
                                <td>{{ $user->nim }}</td>
                                <td>{{ $user->nama }}</td>
                                <td>{{ $user->ipk }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </div>
</body>
</html>
