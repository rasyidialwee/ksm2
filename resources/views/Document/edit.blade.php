<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('documents.update') }}" method="post">
        @csrf
        @method('patch')
        <input type="text" value="{{ $document->nama }}" name="nama">
        <input type="datetime-local" value="{{ $document->tarikh_diterbitkan }}" name="tarikh_diterbitkan">
        <input type="text" value="{{ $document->nama_penulis }}" name="nama_penulis">
        <input type="text" value="{{ $document->disahkan_oleh }}" name="disahkan_oleh">
        <input type="date" value="{{ $document->tarikh_disahkan }}" name="tarikh_disahkan">
        <button type="submit">Simpan</button>
    </form>
</body>

</html>
