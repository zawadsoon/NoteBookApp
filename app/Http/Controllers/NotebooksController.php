<?php

namespace App\Http\Controllers;

use App\Notebook;
use Illuminate\Http\Request;

class NotebooksController extends Controller
{
    public function index()
    {
        $notebooks = Notebook::all(); // notebook to model!!


//        return $notebooks; // zwraca to co w bazie danych w formie json
        return view('notebooks.index', compact('notebooks')); // zmienna która bedzie w index.blade.php przy foreach
    }
}
