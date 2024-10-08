<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title>PemainMU</title>
    </head>
    <body>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nama Pemain</th>
                    <th>No Punggung</th>
                    <th>Posisi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data_pemain as $index => $pemain)
                <tr>
                    <td>{{ $index+1 }}</td>
                    <td>{{ $pemain->nama_pemain }}</td>
                    <td>{{ $pemain->no_punggung}}</td>
                    <td>{{ $pemain->posisi }}</td>            
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>
