<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $data['title'] }}</title>
</head>
<body>
    <h1>My Biodata</h1>
    <table>
        <tr>
            <td>Nama Lengkap</td>
            <td>: {{ $data['nama'] }}</td>
        </tr>
        <tr>
            <td>Nomor Telepon</td>
            <td>: {{ $data['no_hp'] }}</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>: {{ $data['alamat'] }}</td>
        </tr>
    </table>
</body>
</html>