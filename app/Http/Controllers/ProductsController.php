<?php

namespace App\Http\Controllers;

use App\Models\list_products;
use Illuminate\Http\Request;

class ListController extends Controller
{
    public function index()
    {
        $list_products = list_products::all();
        return view('listproducts.index', compact('list_products'));
    }

    public function create()
    {
        return view('listproducts.create');
    }

    public function store(Request $request)
    {
        //input data ke database
        $list_products = list_products::create([
            'name' => $request->name
        ]);
        //redirect atau kembali ke categories index
        return redirect()->route('listproducts.index');
    }
}