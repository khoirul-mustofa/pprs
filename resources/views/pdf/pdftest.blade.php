<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>pdf|biaya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <div class="container" style="height: 3508px, width: 2480px">
        <section>
            <img src="{{ asset('storage/lain-lain/pdfHeader.png') }}" alt="" class="img-fluid">
        </section>
        <section>
            <h6>{{ $data->nama }}</h6>
            <h6>{{ $data->templahir }}</h6>
            <h6>{{ $data->tgllahir }}</h6>
            <h6>{{ $data->jkl }}</h6>
            <h6>{{ $data->statusa }}</h6>
            <h6>{{ $data->nik }}</h6>

        </section>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>
