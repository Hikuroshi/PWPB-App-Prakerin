<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>No</th>
            <th>NISN</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Alamat</th>
            <th>No HP</th>
        </tr>
        <tr>
            @foreach ($siswas as $siswa)
                <td>{{ $loop->iteration }}</td>
                <td>{{ $siswa->nisn }}</td>
                <td>{{ $siswa->nama }}</td>
                <td>{{ $siswa->kelas }}</td>
                <td>{{ $siswa->alamat }}</td>
                <td>{{ $siswa->no_hp }}</td>
            @endforeach
        </tr>
    </table>
</body>
</html>