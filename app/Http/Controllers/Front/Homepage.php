<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


//Models
use App\model\Article;
use App\model\Category;
use App\model\Page;
use App\model\Contact;

class Homepage extends Controller{

    public function __construct(){ /*GLOBALL*/
        view()->share('categories',Category::inRandomOrder()->get());
        view()->share('pages',Page::orderBy('order','ASC')->get());
    }  

    public function index(){ /*ANASAYFA*/
    	$data['articles'] = Article::orderBy('created_at','DESC')->paginate(3);/* Sayfalandırma işlemi*/
    	$data['articles']->withPath(url('sayfa'));        
    	return view('front.homepage',$data);
    }

   	public function single($category,$slug){ /*POST GÖSTERİMİ SİNGLE PAGE*/

   		$category = Category::whereSlug($category)->first() ?? abort(403,'Böyle Bir Kategori Bulunamadı');
   		$article = Article::whereSlug($slug)->whereCategoryId($category->id)->first() ?? abort(403,'Böyle Bir Yazı Bulunamadı');
   		$article->increment('hit');
   		$data['article'] = $article;
   		return view('front.single',$data);

   	}
    
    public function category($slug)/* KATEGORİ YAZILARI LİSTEME*/
    {
      $category = Category::whereSlug($slug)->first() ?? abort(403,'Böyle Bir Kategori Bulunamadı');
      $data['category'] = $category;
      $data['articles'] = Article::where('category_id',$category->id)->orderBy('created_at','DESC')->paginate(2);
      return view('front.category',$data);

    }

    public function page($slug){/*hakkimizda-kariyer-vizyon-misyon*/
      $page = Page::whereSlug($slug)->first() ?? abort(403,'Böyle Bir Sayfa Bulunamadı');
      $data['page'] = $page;
      return view('front.page',$data);
    }
    public function contact(){
      
      return view('front.contact');
    }
    public function contactPost(Request $request)
    { 
      //Contact database'ye kayıt işlemleri
      
      

      $contact = new Contact;
      $contact->name = $request->name;
      $contact->email = $request->email;
      $contact->message = $request->message;
      $contact->topic = $request ->topic;
      $contact->save();
                  //'success' isminde bir session yollandı
      return redirect()->route('contact')->with('success','İletişim Mesajınız Bize İletildi Teşekkür Ederiz');

   }
}

