<?php

/** 
 *　アプリケーション情報マスタ
 */

namespace App\Package;

use Hamcrest\Type\IsNumeric;
use Illuminate\Support\Facades\DB;

class PropertyMaster
{
    private $table = 'properties_master';
    const PER_PAGE = 20;

    /**
     * テーブル情報を全て抽出します
     *
     * @return array
     */
    public function get(): array
    {
        $aRet = array();
        $aRet = DB::select('select * from ' . $this->table);
        return $aRet;
    }

    /**
     * ページ毎のテーブル情報を全て抽出します
     *
     * @param int $page ページ情報
     * @return array
     */
    public function getPerPage(int $page): array
    {
        $aRet = array();
        if (!is_numeric($page)) {
            return array();
        }
        $startPosition = ($page - 1) * self::PER_PAGE;
        $aRet = DB::select('select * from ' . $this->table . ' LIMIT ' . self::PER_PAGE . ' OFFSET ' . $startPosition);
        return $aRet;
    }

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
