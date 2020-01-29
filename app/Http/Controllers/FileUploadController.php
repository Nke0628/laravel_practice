<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SebastianBergmann\Environment\Console;
use Webpatser\Uuid\Uuid;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;

class FileUploadController extends Controller
{
    public function index()
    {
        return view('fileupload.index');
    }

    public function post(Request $request)
    {
        $key = Uuid::generate()->string;
        $file = $request->file('file');
        $path = $file->storeAs('tmp', $key . '.' . $file->getClientOriginalExtension());
        dd(new \SplFileObject(storage_path('app/' . $path)));
        dd(fopen(storage_path('app/' . $path), 'rb'));
    }

    public function useGuzzle()
    {
        $client = new Client();
        //resはResponseInterfaceをGuzzleで実装したもの
        $res = $client->request("GET", "http://www.example.com/");
        //getBodyはStremaInterfaceをGuzzleで実装したものを返す
        dd($res->getBody()->__toString());
    }

    public function useFopen()
    {
        //fopneして一行ずつ読み込む
        $content = '';
        $handle = fopen("http://www.example.com/", "r");
        while ($read = fgets($handle)) {
            $content .= $read;
        };
        dd($content);

        //fopenでstream_context_createを使用する
        $url = "http://www.example.org";
        $opts = array(
            'http' => array(
                'method' => 'GET',
                'header' => array(
                    'Content-Type: application/x-www-form-urlencoded'
                )
            )
        );
        $context = stream_context_create($opts);
        $stream = fopen($url, 'r', false, $context);
        dd(stream_get_meta_data($stream));
    }
}
