<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use App\Models\User;
// use Clockwork\Storage\Storage;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Gate;

class SettingsNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.home',[
            'title' => "All News",
            'news'=> News::latest()->get()
        ]);
    }

    public function showCategory(){
        return view('dashboard.category',[
            'title' =>'All Category',
            'categories' => Category::all()
        ]);
    }

    public function authorNews($username){
        return view('dashboard.newsAuthor',[
            'title'=> "Your News",
            $user = User::where('username',$username)->firstOrFail(),
            'news' => News::where('user_id',$user->id)->get()
        ]);
    }

    public function addNews(){
        return view('dashboard.addNews',[
            'category'=>Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        // melakukan validasi request
        $validatedData = $request->validate([
            'title'=> 'required|max:255',
            'slug' =>'required|unique:news',
            'category_id' => 'required',
            'image'=>'image|file|dimensions:min_width=300,min_height=300|max:2000',
            'body' =>'required'
        ]);
        // menyimpan image aploud
            if($request->file('image')){
                $validatedData['image'] = $request->file('image')->store('post-images');
            }
        // mengisi id_user
            $validatedData['user_id']=auth()->user()->id;
        
        // mengisi element body database
            $validatedData['kutipan'] = Str::limit(strip_tags($request->body),200,'...');

            News::create($validatedData);
            return redirect('/dashboard')->with('success','News has been add');   
            

    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        return view('dashboard.detail',[
            'title' => 'news Detail',
            'news' => $news
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        if (auth()->user()->id !== $news->id) {
            if (! Gate::allows('admin')) {
                abort(403);
            }
        }
  
     
       return view('dashboard.editNews',[
            'title'=> 'edit your News',
            'news'=>$news,
            'category' =>Category::all()
       ]); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news)
    {

        $rules = [
            'title'=> 'required|max:255',
            'slug' =>'required|unique:news',
            'category_id' => 'required',
            'image'=>'image|file|dimensions:min_width=300,min_height=300|max:2000',
            'body' =>'required'
        ];
        // cek bagian slug
        if($request->slug != $news->slug){
            $rules['slug'] = 'required|unique:news';
        };
        // validasi request image
        $validatedData = $request->validate($rules);

        // hapus image lama
        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($news->image);
            }    
            $validatedData['image'] = $request->file('image')->store('post-images');  
        }
        
        $validatedData['user_id'] = auth()->user()->id;

         // mengisi element body database
         $validatedData['kutipan'] = Str::limit(strip_tags($request->body),200,'...');
        
        //  querry update data
        News::where('id',$news->id)->update($validatedData);

        return redirect('/dashboard')->with('success','Your News has been updated');

    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        News::destroy($news->id);
        return redirect('/dashboard')->with('success','News has been deleted');   
    }

    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(News::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }

    // function function adminSetings
    public function adminSettings(){
        $this->authorize('admin');
        return view('dashboard.adminSettings',[
            'title'=>'settings Admin',
            'news'=>News::latest()->get(),
        ]);
    }

    public function updateStatus(Request $request){
       return $request;
    }

}
