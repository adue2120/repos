<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Book;

class BookController extends Controller
{

     /**
      * Undocumented function
      *
      * @param string $modal
      * @param array $mode
      * @return void
      */
    public function index(string $modal, array $mode): void
    {
        $data = [
            'books'  => Book::all()
        ];
        Log::debug('デバッグ用。$dataの内容です');
        Log::debug($data);

        return view('book.index', $data);
    }
}
