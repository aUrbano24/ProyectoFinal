<?php
namespace App\Http\Controllers;

/*class HolaController extends Controller {
    public function __invoke(string $name)
    {
        return "Hola {$name}";
    }
}*/

/*class HolaController extends Controller {
    public function index(string $name): string
    {
        return "Hola {$name}";
    }
}*/

class HolaController extends Controller {
    public function index(string $name): string
    {
        return view("hola", compact(var_name: "name"));
    }
}

