<?php

/** 
 *　情報設定ライブラリ
 */

namespace App\Package;

use Illuminate\Support\Facades\DB;

class Property
{
    private $table = 'properties';

    /**
     * 指定したキーでプロパティを取得
     *
     * @param string $key
     * @return array
     */
    public function getProperty(string $key): array
    {
        $aRet = array();

        if (!$key) {
            return  $aRet;
        }

        $aRet = DB::select('select * from ' . $this->table . ' where val = ?', [$key]);
        return $aRet;
    }
}
