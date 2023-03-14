<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('documents.store') }}" method="post">
        @csrf
        <input type="text" name="nama">
        <input type="date" name="tarikh_diterbitkan">
        <input type="text" name="nama_penulis">
        <input type="text" name="disahkan_oleh">
        <input type="date" name="tarikh_disahkan">
        <button type="submit">Simpan</button>
    </form>
</body>

</html>
