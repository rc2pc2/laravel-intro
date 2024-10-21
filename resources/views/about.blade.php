<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center fw-bold p-4 mb-3">
                    {{  $title }}
                </h1>
            </div>
            <div class="col-12">
                <h2>
                    Risultato della richiesta:
                </h2>
                <p class="fs-3 fw-bold">
                    <ul>
                        @foreach ( $lista as $listItem )
                            <li>
                                {{ $listItem }}
                            </li>
                        @endforeach
                    </ul>
                </p>
            </div>
        </div>

    </main>
</body>
</html>
