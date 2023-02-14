<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;

function tag($tag, $content)
{
    return "<{$tag}>" . $content . "</{$tag}>";
}

class HelloController extends Controller
{
    /*
    * @return void
    */
    public function index(Request $request, Response $response)
    {
        // $id = $request->id;
        // $data = [
        //     'msg' => 'これはbladeへ渡されたメッセージです',
        //     'id'  => $id
        // ];
        $data = ['one','two','three'];
        return view('hello.index', ['message' => 'Hello!!']);
    }

    public function post(Request $request, Response $response)
    {
        $data = ['one','two','three'];
        return view('hello.index', ['data' => $data]);
    }
}
