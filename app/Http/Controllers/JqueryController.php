<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JqueryController extends Controller
{
    public function index()
    {
        return view('jquery.ui');
    }

    public function getShain(Request $request)
    {
        if ($request->kbn == 1) {
            $data = array(
                [
                    'id' => '11111',
                    'name' => '中村健二',
                    'busyo' => '情報システム'
                ],
                [
                    'id' => '11112',
                    'name' => '青空太郎',
                    'busyo' => '総務課'
                ]
            );
        } else {
            $data = array(
                [
                    'id' => '11111',
                    'name' => '中村健二',
                    'busyo' => '情報システム'
                ],
            );
        }
        return json_encode($data);
    }
}
