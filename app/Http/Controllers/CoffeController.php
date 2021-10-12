<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBookRequest;
use App\Http\Requests\CreateCoffeRequet;
use App\Models\Category;
use App\Models\coffe;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CoffeController extends Controller
{
    public function index()
    {
        $coffe = Coffe::all();
        return view('coffe.list', compact('coffe'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('coffe.add', compact('categories'));
    }

    public function store(CreateCoffeRequet $request)
    {
        $coffe = new Coffe();
        $coffe ->name = $request->name;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $coffe ->image = $path;

        }

        $coffe ->price = $request->price;
        $coffe ->category_id = $request->category_id;
        $coffe ->save();
        $message = "Thêm Sách thành công!";
        Session::flash('create-success', $message);
        return redirect()->route('coffe.index', compact('message'));
    }

}
