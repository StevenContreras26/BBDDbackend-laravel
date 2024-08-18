<?php

namespace App\Http\Controllers;

use App\Http\Requests\Articles\IndexRequest;
use App\Http\Resources\Article\IndexResource;
use App\Models\Article;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(IndexRequest $request)
    {

        return IndexResource::collection(Article::all());
    }
}
