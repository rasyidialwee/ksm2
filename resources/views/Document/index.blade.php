<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Senarai dokumen-dokumen </h1>

    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Tarikh Diterbitkan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($documents as $document)
                <tr>
                    <td>{{ $documents->firstItem() + $loop->index }}</td>
                    <td>{{ $document->nama }}</td>
                    <td>{{ $document->tarikh_diterbitkan }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $documents->links() }}
</body>

</html>
