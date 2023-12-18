<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    public function brands()
    {
        $brands = Brand::latest()->paginate(5);
        return view('brands', compact('brands'));
    }

    public function addBrand(Request $request)
    {
        //         // dd($request->brand_name);
        $request->validate(
            [
        'brand_name' => 'required|unique:brands,name',
            ],
            [
                'brand_name.required' => 'Brand Name is required',
                'brand_name.unique' => 'Brand already exists',
            ]
        );

        $brand = new Brand();
        $brand->name = $request->brand_name;

        $brand->save();
        return response()->json([
            'status' => 'success',
        ]);
    }
}
