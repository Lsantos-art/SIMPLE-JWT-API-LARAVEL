<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        return Products::all();
    }


    public function store(Request $request)
    {
        Products::create($request->all());
        return 'Produto inserido com sucesso!';
    }


    public function show($id)
    {
        $product = Products::find($id);
        return $product;
    }


    public function update(Request $request, $id)
    {
        $product = Products::find($id);
        $product->update($request->all());
        return 'Produto atualizado com sucesso!';
    }


    public function destroy($id)
    {
        $product = Products::find($id);
        $product->delete();
        return 'Produto deletado com sucesso!';
    }
}
