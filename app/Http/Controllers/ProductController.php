<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ops = [
            "page"  => 1,
            "limit" => 12,
        ];

        $results =  Product::paginate( $ops['limit'] );


        // $results = DB::table('users')
        //         ->join('contacts', 'users.id', '=', 'contacts.user_id')
        //         ->leftJoin('posts', 'users.id', '=', 'posts.user_id')
        //         ->rightJoin('posts', 'users.id', '=', 'posts.user_id')

        //         ->crossJoin('colours')

        //         ->select('*' ) // DB::raw('count(*) as user_count, status')



        //         ->groupBy('status')
        //         // ->select('department', DB::raw('SUM(price) as total_sales'))
        //         ->havingRaw() // 'SUM(price) > ?', [2500]


        //         ->orderBy('name', 'desc')

        //         ->limit( $ops->limit )
        //         ->get();


        dd($results);
        return view('pages.product')->with( 'results', $results );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
