<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($category)
    {
        $categoryView = 'products.' . lcfirst(str_replace('-', '', ucwords($category, '-')));

        if (!view()->exists($categoryView)) {
            abort(404, 'Page not found');
        }

        return view($categoryView);
    }
}