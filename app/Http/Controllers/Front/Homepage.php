<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



//Models
use App\model\Article;
use App\model\Category;
use App\model\Page;
 

class Homepage extends Controller{

    public function index(){ /*ANASAYFA*/
    	$data['articles'] = Article::orderBy('created_at','DESC')->paginate(2);/* Sayfalandırma işlemi*/
    	$data['articles']->withPath(url('sayfa'));
      $data['categories'] = Category::inRandomOrder()->get();
      
    	return view('front.homepage',$data);
    }

   	public function single($category,$slug){ /*POST GÖSTERİMİ SİNGLE PAGE*/
   		Category::whereSlug($category)->first() ?? abort(403,'Böyle Bir Kategori Bulunamadı');
   										/* Article Sayısı 1 adet */		/* Eğer Article Bulamassa */
   		$article = Article::whereSlug($slug)->first() ?? abort(403,'Böyle Bir Yazı Bulunamadı');
   		$article->increment('hit');
   		$data['article'] = $article;
   		$data['categories'] = Category::inRandomOrder()->get();
   		return view('front.single',$data);
   	}
    
    public function category($slug)/* KATEGORİ YAZILARI LİSTEME*/
    {
      $category = Category::whereSlug($slug)->first() ?? abort(403,'Böyle Bir Kategori Bulunamadı');
      $data['category'] = $category;
      $data['categories'] = Category::inRandomOrder()->get();
      $data['articles'] = Article::where('category_id',$category->id)->orderBy('created_at','DESC')->paginate(2);
      return view('front.category',$data);
    }

}

