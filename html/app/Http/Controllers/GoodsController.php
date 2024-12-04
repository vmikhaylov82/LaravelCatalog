<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

use Illuminate\Http\Request;
use App\models\Goods;
use App\models\Comments;

class GoodsController extends Controller
{
    //вывод каталога
    public function index() {

        //выборка товаров
        $data = DB::table('goods')->paginate(3);
        Paginator::useBootstrap();

        //выборка для формы характеристик - список чекбоксов "матрица экрана"
        $listMatrix = DB::table('goods')->select('matrix')->distinct()->get();
        //выборка для формы характеристик - список чекбоксов "размер экрана"
        $listDiagonal = DB::table('goods')->select('diagonal')->orderBy('diagonal')->distinct()->get();
            
        //return view('index', compact('data', 'listMatrix', 'listDiagonal'));

        return response()->json([
            'status' => true,
            'data' => $data
        ], 200);
    }

    //вывод отдельного товара и комментариев
    public function item($id) {

        $data = Goods::find($id);
        $comments =  DB::table('comments')->where('goods_id', '=', $data->id)->get();

        //return view('item', compact('data', 'comments'));

        return response()->json([
            'status' => true,
            'data' => $data, 
            'comments' => $comments 
        ], 200);
    }

    //сохранение отзыва
    public function saveComment(Request $request) {

        $data = new Comments();
        $data->goods_id = $request->goods_id;
        $data->comment = $request->comment;
        $data->save();

        //return redirect()->back();

        return response()->json([
            'status' => true,
            'comment' => $data 
        ], 201);
    }

    //вывод каталога с параметрами фильтрации
    public function indexWithParams(Request $request) {

        $query =  DB::table('goods');
        
        if (!empty($request->costFrom)) {
            $query->where('cost', '>=', $request->costFrom);
        }        
        if (!empty($request->costTo)) {
            $query->where('cost', '<=', $request->costTo);
        }      
        if (!empty($request->matrix)) {
            $query->whereIn('matrix', $request->matrix);
        }  
        if (!empty($request->diagonal)) {
            $query->whereIn('diagonal', $request->diagonal);
        }  
        //dump($query->toSql());
        
        $data = $query->paginate(3)->withQueryString();
        Paginator::useBootstrap();

        //выборка для формы характеристик - список чекбоксов "тип матрицы"
        $listMatrix = DB::table('goods')->select('matrix')->distinct()->get();
        //выборка для формы характеристик - список чекбоксов "диагональ экрана"
        $listDiagonal = DB::table('goods')->select('diagonal')->orderBy('diagonal')->distinct()->get();
            
        //return view('index', compact('data', 'request', 'listMatrix', 'listDiagonal'));

        return response()->json([
            'status' => true,
            'data' => $data
        ], 200);
    }
		
}
