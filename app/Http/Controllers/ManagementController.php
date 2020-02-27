<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Mixed;
use Illuminate\Support\Facades\DB;
use App\Package\PropertyMaster;

class ManagementController extends Controller
{
    /**
     * 一覧画面(マスタ)
     *
     * @return
     */
    public function indexMaster()
    {
        // $test = new PropertyMaster();ª
        // $test2 = $test->getPerPage(2);
        // dd($test2);
        $properties = DB::select('SELECT * FROM properties_master');
        return view('management.property.index-master', compact('properties'));
    }

    public function destroyMaster(Request $request)
    {
        $delTarget = $request->chk;
        if ($delTarget) {
            try {
                DB::beginTransaction();
                foreach ($delTarget as $target) {
                    DB::table('properties_master')->where('id', $target)->delete();
                }
                DB::commit();
            } catch (\Exception $e) {
            }
        }
        redirect('/management/propertymaster');
    }

    /**
     * 一覧画面(詳細)
     *
     * @return
     */
    public function index()
    {
        return view('management.property.index');
    }
}
