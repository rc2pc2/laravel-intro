<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// # per ogni rotta che ho a disposizione, ho un "uri" nella mia applicazione a cui l'utente puo' chiedere qualcosa.
Route::get('/', function () {
    $title = "Homepage sPECIAl";
    return view('home', compact("title")); // [ "title" => $title ]
});

// % Gestore delle rotte, crea una nuova rotta che a seguito di una chiamata GET
// % all'indirizzo "/about" allora, invoca
// % una funzione anonima di callback che ritorni qualcosa
Route::get('/about', function () {

    //  # prendo i dati dal db
    //  # li inserisco in una variabile
    $title = "Nuovo titolo moderno del db";
    $lista = [
        "lanciafiamme",
        "windows tranquillo",
        "domanda banale",
        "formaggio",
        "no anzi parmigiano"
    ];

        // [
    //     "title" => $title,
    //     "lista" => $lista
    // ]
    // ! compact("title", "lista) => [ "title" => $title, "lista" => $lista ];
    //  # li consegno alla view
    return view('about', compact("title", "lista"));
});

// ! compact("variabile") => [ "variabile" => $variabile ]
