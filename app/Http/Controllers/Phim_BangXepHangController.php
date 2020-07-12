<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Model\Phim_BangXepHang;
use App\Model\BangXepHang;
use App\Model\Phim;
use Illuminate\Validation\Rule;

class Phim_BangXepHangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $products = DB::table('Phim_BangXepHang')->where('idBangXepHang',$id)->orderBy('hang','ASC')->get();
        $bangxephang = BangXepHang::find($id);
        $phim = Phim::all();
        return \view('admin.phim_bangxephang.index')->with(['products'=>$products,'bangxephang'=>$bangxephang,'phim'=>$phim]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Kiem tra unique
        $idBangXepHang = $request->idBangXepHang;
        $idPhim = $request->idPhim;
        $this->validate($request,
        [
            'idPhim' => [Rule::unique('Phim_BangXepHang')->where(function($query) use($idBangXepHang,$idPhim)
            {
                return $query->where('idBangXepHang',$idBangXepHang)
                            ->where('idPhim',$idPhim);
            })],
        ],
        [
            'idPhim.unique' => 'Đã có phim này rồi',
        ]);

        $product = Phim_BangXepHang::create($request->input());
        return response()->json($product);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($product_id)
    {
        $product = Phim_BangXepHang::find($product_id);
        return response()->json($product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Kiem tra unique
        $idBangXepHang = $request->idBangXepHang;
        $idPhim = $request->idPhim;
        $this->validate($request,
        [
            'idPhim' => [Rule::unique('Phim_BangXepHang')->where(function($query) use($idBangXepHang,$idPhim)
            {
                return $query->where('idBangXepHang',$idBangXepHang)
                            ->where('idPhim',$idPhim);
            })->ignore($id)],
        ],
        [
            'idPhim.unique' => 'Đã có phim này rồi',
        ]);

        $product = Phim_BangXepHang::find($id);
        $product->idPhim = $request->idPhim;
        $product->hang = $request->hang;
        $product->save();
        return response()->json($product);
    }

    public function sort(Request $request)
    {
        $phim_bxhs = Phim_BangXepHang::all();

        foreach ($phim_bxhs as $phim_bxh) {
            foreach ($request->order as $hang) {
                if ($hang['id'] == $phim_bxh->id) {
                    $phim_bxh->update(['hang' => $hang['position']]);
                }
            }
        }

        return response('Update Successfully.', 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($product_id)
    {
        $product = Phim_BangXepHang::destroy($product_id);
        return response()->json($product);
    }
}
