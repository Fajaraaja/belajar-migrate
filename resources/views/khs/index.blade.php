<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Mahasiswa List</h1>
        {{-- <a href="/home" class="btn btn-success">Balik ke Home</a> --}}
        <br>
            <div class="row">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Mata Kuliah</th>
                            <th>Nilai</th>
                            <th>SKS</th>
                            <th>Semester</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($khs as $user)
                            <tr>
                                <td>{{ $user->nim }}</td>
                                <td>{{ $user->nama }}</td>
                                @if(isset($user->matkul))
                                <td>{{ $user->matkul }}</td>
                                @else
                                <td>-</td>
                                @endif
                                @if(isset($user->nilai))
                                <td>{{ $user->nilai }}</td>
                                @else
                                <td>-</td>
                                @endif
                                @if(isset($user->Sks))
                                <td>{{ $user->Sks }}</td>
                                @else
                                <td>-</td>
                                @endif
                                @if(isset($user->semester))
                                <td>{{ $user->semester }}</td>
                                @else
                                <td>data tidak ada</td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </div>
</body>
</html>
