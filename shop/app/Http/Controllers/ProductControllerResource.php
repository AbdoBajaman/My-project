<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductControllerResource extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data=product::all();

        // $data=product::latest().paginate(5);
        // $data=product::all().paginate(5);






        // return view('try/index',['data'=>$data]);
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
        
    //     $request->validate([

    //         'name'=>'required',
    //         'descripption'=>'required',
    //         'image'=>'required'


    //     ]);
    // //   $x= product::create($request->all());
    // //    $x.save();


    //    product::create($request->all());
    //    return redirect('products');
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
    public function update(Request $request, $product)
    {
        $request->validate([

            'name'=>'required',
            'descripption'=>'required'

        ]);

        // $product->update($request->all());
      
        // return redirect()->route('products.index')
        //                 ->with('success','Product updated successfully');


        $product->update($request->all());

    //    $update= product::update($request->all());

       return redirect('products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($product)
    {
        $product->delete();

        return  redirect('products');


      }
}
