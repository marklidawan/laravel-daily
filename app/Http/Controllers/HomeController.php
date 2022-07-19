<?php

namespace App\Http\Controllers;

//Models
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $allCategories = Category::all();

        return view('index', ['categories' => $allCategories]);
    }
}
