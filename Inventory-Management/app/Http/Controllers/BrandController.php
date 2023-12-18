<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function brands()
    {
        return view('brands');
    }

    public function addBrand(Request $request)
    {
        dd($request->name);
        $request->validate(
            [
'brand_name' => 'required|unique:brands',
            ],
            [
                'brand_name.required' => 'Brand Name is required',
                'brand_name.unique' => 'Brand already exists',
            ]
        );

        $brand = new Brand();
        $brand->name = $request->name;

        $brand->save();
    }
}
