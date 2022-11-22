<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\About;
use App\Course;
use App\Article;
use App\Contact;
use App\Images;

class MainController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function about(){
        $about = About::find(1);
        $images = Images::limit(4)->orderBy('created_at','DESC')->get();
        return view('about',compact('about','images'));
    }
    public function courses(){
        $courses = Course::where('status',1)->get();
        return view('courses',compact('courses'));
    }
    public function article(){
        $articles = Article::where('status',1)->orderBy('hit','DESC')->paginate(6);
        return view('articles',compact('articles'));
    }
    public function articleSingle($slug){
      $colors = ['primary','success','danger','warning','info','dark'];
      $thisarticle=Article::where('status',1)
      ->where('slug',$slug)->first() ?? abort(404, 'Not Found');
      $thisarticle->increment('hit');
      $articles = Article::where('id','!=',$thisarticle->id)->where('status',1)->orderBy('hit','DESC')->get();
      return view('article-single',compact('thisarticle','articles','colors'));
    }
    public function contact(){
        return view('contact');
    }
    public function contactPost(Request $request)
    {
        $this->validate($request, [
            'name'=>'required|min:5',
            'email'=>'required|email',
            'phone'=>'required|digits_between:6,16',
            'message'=>'required|min:20',
            'g-recaptcha-response' => 'required|recaptcha'
        ]);
        $contact = new Contact;
        $contact->name = $request->name;    
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->message = $request->message;
        $contact->save();
        return redirect()->route('contact')->with('success','Mesajınız Göndərildi');
    }
}
