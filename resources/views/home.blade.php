<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header></header>
    <main class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center fw-bold p-4 mb-3">
                    {{  $title }}
                </h1>
            </div>
            <div class="col-12">
                <h2 class="fw-bold text-right" custom-data="{{ $title }}">
                    Home page di Laravel
                </h2>
            </div>
        </div>

    </main>
</body>
</html>
