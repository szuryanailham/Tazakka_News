<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
      return view('news',[
        'title'=>"berita terkini",
        'news'=>News::with(['author','category'])->latest()->paginate(20)
      ]);
    }
    public function show(News $news){
      return view('detailnews',[
        'news'=>$news
      ]);
    }
    public function showCategories(){
      return view('categories',[
        'categories'=>Category::all()
      ]);
    }

    public function category(Category $category){
      return view('news',[
        'category'=>$category
      ]);
    }
}
