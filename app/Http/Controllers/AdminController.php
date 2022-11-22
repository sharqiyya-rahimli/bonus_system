<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Student;
use App\Group;
use App\Payment;
use App\Attendance;
use App\Expense;
use App\About;
use App\Course;
use App\Article;
use App\Contact;
use App\Network;
use App\Branch;
use App\Client;
use App\Order;
use App\Images;
use DateTime;
use Carbon\Carbon;
use Validator;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $sum_payment1=1;
        $sum_expense1=2;

        $sum_payment=3;
        $sum_expense=4;

        return view('admin.home')->with('sum_payment',$sum_payment)->with('sum_expense',$sum_expense)->with('sum_payment1',$sum_payment1)->with('sum_expense1',$sum_expense1);
    }

    public function get_networks(Request $request)
    {
        if ($request->has('name'))
            $networks = Network::where('name', 'ilike', '%'.$request->input('name').'%')->paginate(15);
        else $networks=Network::paginate(15);
        return view('admin/networks')->with('networks',$networks);
    }
    public function add_network(Request $request)
    {
        return view('admin/add_network');
    }
    public function submit_network(Request $request)
    {
        $network = new Network;
        $network->create(['name' => $request->input('name')]);
        return redirect('admin/networks');
    }

    public function get_branches(Request $request)
    {
        if ($request->has('name'))
            $branches = Branch::where('name', 'ilike', '%'.$request->input('name').'%')->paginate(15);
        else $branches=Branch::paginate(15);
        return view('admin/branches')->with('branches',$branches);
    }
    public function add_branch(Request $request)
    {
        $networks=Network::all();
        return view('admin/add_branch')->with('networks',$networks);
    }
    public function submit_branch(Request $request)
    {
        //return $request->input();
        $file = $request->file('logo_path');
         //Move Uploaded File
        $destinationPath = 'uploads';
        $file->move($destinationPath,$file->getClientOriginalName());
        $branch = new Branch;
        $branch->create([  'name' => $request->input('name'),
                            'address' => $request->input('address'),
                            'logo_path' => $file->getClientOriginalName(),
                            'network' => $request->input('network_id')]);
        
        return redirect('admin/branches');
    }


    public function get_clients(Request $request)
    {
        if ($request->has('name'))
            $clients = Clinet::where('name', 'ilike', '%'.$request->input('name').'%')->paginate(15);
        else $clients=Client::paginate(15);
        return view('admin/clients')->with('clients',$clients);
    }

    public function add_client(Request $request)
    {
        
        return view('admin/add_client');
    }
    public function submit_client(Request $request)
    {
        


        $client = new Client;
        $birthDate = DateTime::createFromFormat('d.m.Y', $request->input('birthdate'));
        $client->create([  'name' => $request->input('name'),
                            'surname' => $request->input('surname'),
                            'contact' => $request->input('contact'),
                            'email' => $request->input('email'),
                            'birthdate' => $birthDate,
                            
                           
                        ]);
        
        return redirect('admin/clients');
    }
    
 public function get_orders(Request $request)
    {
        if ($request->has('name'))
            $orders = Order::where('name', 'ilike', '%'.$request->input('name').'%')->paginate(15);
        else $orders=Order::paginate(15);
        return view('admin/orders')->with('orders',$orders);
    }

    public function add_order(Request $request)
    {
    
        return view('admin/add_order');
    }
    public function submit_order(Request $request)
    {
        


        $order = new Order;
        $order_date = DateTime::createFromFormat('d.m.Y', $request->input('order_date'));
        $order->create([  'client_id' => $request->input('client_id'),
                            'order_date' => $order_date,
                            'total_amount' => $request->input('total_amount'),
                            'user' =>auth()->user()->id
                        ]);
        
        return redirect('admin/orders');
    }
















    
    public function get_students(Request $request)
    {
        if ($request->has('name'))
            $students = Student::where('name', 'like', '%'.$request->input('name').'%')->where('status', '=', '1')->paginate(15);
        else $students=Student::where('status', '=', '1')->paginate(15);
        return view('admin/student_list')->with('students',$students);
    }
    public function add_student(Request $request)
    {
        $groups=Group::all();
        return view('admin/add_student')->with('groups',$groups);
    }
    public function submit_student(Request $request)
    {
        $student = new Student;
        $birthDate = DateTime::createFromFormat('d.m.Y', $request->input('birthdate'));
        if ($request->has('student_id') and $request->input('student_id') <> ''){
            $student->where(['id' => $request->input('student_id')])->update(['name' => $request->input('name'), 'parent_name' => $request->input('parent_name'), 'contact' => $request->input('contact'), 'birthdate' => $birthDate, 'group_id' => $request->input('group_id'), 'note' => $request->input('note')]);
        }
        else {
            $student->create(['name' => $request->input('name'), 'parent_name' => $request->input('parent_name'), 'contact' => $request->input('contact'), 'birthdate' => $birthDate, 'group_id' => $request->input('group_id'), 'note' => $request->input('note')]);
        }


        return redirect('admin/students');
    }
    public function get_groups1(Request $request)
    {
        if ($request->has('name'))
            $groups = Group::where('name', 'like', '%'.$request->input('name').'%')->paginate(15);
        else $groups=Group::paginate(15);
        return view('admin/group_list')->with('groups',$groups);
    }
    public function add_group(Request $request)
    {
        return view('admin/add_group');
    }
    public function submit_group(Request $request)
    {
        $group = new Group;
        $group->create(['name' => $request->input('name')]);
        return redirect('admin/groups');
    }
    public function get_payments(Request $request)
    {
        $payments=Payment::paginate(15);
        return view('admin/payment_list')->with('payments',$payments);
    }
    public function add_payment(Request $request)
    {
        $students=Student::all();
        return view('admin/add_payment')->with('students',$students);
    }
    public function submit_payment(Request $request)
    {
        $payment = new Payment;
        $payment_date = DateTime::createFromFormat('d.m.Y', $request->input('payment_date'));
        $payment->create(['student_id' => $request->input('student_id'),'amount' => $request->input('amount'),'lesson_count' => $request->input('lesson_count'),'note' => $request->input('note'),'payment_date' => $payment_date]);
        $student = Student::find($request->input('student_id'));
        $lesson_count=$student->unpayed_lessons;
        $student->update(['unpayed_lessons'=>$lesson_count-$request->input('lesson_count')]);
        return redirect('admin/payments');
    }
    public function get_attendance(Request $request)
    {
        $attendance=Attendance::paginate(15);
        return view('admin/attendance_list')->with('attendances',$attendance);
    }
    public function add_attendance(Request $request)
    {
        $students=Student::all()->where('status', '=', '1');
        return view('admin/add_attendance')->with('students',$students);
    }
    public function submit_attendance(Request $request)
    {
        $students=$request->input('students');
        $attendance_date = DateTime::createFromFormat('d.m.Y', $request->input('attendance_date'));
        for($i = 0; $i < count($students); $i++) {
          $student = Student::find($students[$i]);
          $lesson_count=$student->unpayed_lessons;
          $student->update(['unpayed_lessons'=>$lesson_count+1]);
          $attendance=new Attendance;
          $attendance->create(['student_id' => $students[$i],'attendance_date' => $attendance_date]);
        }
        return redirect('admin/attendance');
    }
    public function edit_student(Request $request)
    {
            if ($request->has('id') and $request->input('id') <> '') {
                $student = Student::find($request->input('id'));
            }
        $groups=Group::all();
        return view('admin/add_student')->with('groups',$groups)->with('student',$student);

    }
    public function delete_student(Request $request)
    {
        $student = new Student();
            if ($request->has('del_id') and $request->input('del_id') <> '') {
                $student->where(['id' => $request->input('del_id')])->update(['status' => '0']);
            }
            return redirect()->action(
                'AdminController@get_students'
            );
    }
    public function expenses(Request $request)
    {
        $expenses=Expense::where('status', '=', '1')->paginate(15);
        return view('admin/expenses')->with('expenses',$expenses);
    }
    public function add_expense(Request $request)
    {
        return view('admin/add_expense');
    }
    public function submit_expense(Request $request)
    {
        $expense = new Expense;
        $expense_date = DateTime::createFromFormat('d.m.Y', $request->input('expense_date'));
        $expense->create(['note' => $request->input('note'),'expense_date' => $expense_date,'amount' => $request->input('amount')]);
        return redirect('admin/expenses');
    }
    public function Contacts()
    {
        $contacts = Contact::paginate(10);
        return view('admin.contacts_list',compact('contacts'));
    }
    public function ContactDestroy(Request $request)
    {
        $contact = Contact::find($request->id);
        $contact->delete();
        return redirect()->back();
    }
  
    public function AboutUs()
    {
        $about = About::find(1);
        $images = Images::orderBy('created_at','DESC')->get();
        return view('admin.back_about',compact('about','images'));
    }
    public function AboutUpdate(Request $request)
    {
        $validator = $this->validate($request, [
            'title'=>'nullable|min:50',
            'content'=>'required|min:150',
            'bg_image'=>'image|mimes:jpeg,png,jpg|max:1024',
        ]);
        $about = About::find(1);
        if ($request->hasFile('bg_image')) {
            $imageName='aboutpage-bg-image'.'.'.$request->bg_image->getClientOriginalExtension();
            $request->bg_image->move(public_path('frontend/images'),$imageName);
            $about->bg_image ='frontend/images/'.$imageName;
            }
        $about->title = $request->title;
        $about->content = $request->content;
        $about->save();
        return redirect()->route('admin.about');
    }

    public function ImagesStore(Request $request)
    {
        if ($request->hasFile('images')) {
            foreach ($request->images as $image) {
            $var = date_create();
            $time = date_format($var, 'Y-m-d');
            $imageName = $time.'-'.$image->getClientOriginalName();
            $image->move(public_path('frontend/images/gallery'),$imageName);
            $arr[] = $imageName;
            }
            foreach ($arr as $image) {
                Images::insert([
                    'image' => 'frontend/images/gallery/'.$image
                ]);
            }
        }
        return redirect()->route('admin.about');
    }
    public function ImageDestroy(Request $request)
    {
        $image = Images::find($request->id);
        if ($image->image) {
            unlink($image->image);
        }
        $image->delete();
        return redirect()->back();
    }

    public function Courses(Request $request)
    {
        $created = $request->created;
        $updated = $request->updated;
        $toasts = [$created,$updated];
        $courses = Course::paginate(6);
        return view('admin.course.courses_list',compact('courses','toasts'));
    }
    public function CourseCreate()
    {
        return view('admin.course.course_create');
    }
    public function CourseStore(Request $request)
    {
        $this->validate($request, [
            'name'=>'required|min:5',
            'class_time'=>'nullable',
            'subject'=>'nullable',
            'image'=>'nullable|image|mimes:jpeg,png,jpg',
        ]);
        $course = new Course;
        if ($request->hasFile('image')) {
            $imageName=str_slug($request->name).'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('frontend/images/course-images'),$imageName);
            $course->image ='frontend/images/course-images/'.$imageName;
            }
        $course->name = $request->name;    
        $course->subject = $request->subject;
        $course->class_time = $request->class_time;
        $course->save();
        $created = 'ok';
        return redirect()->route('admin.courses',compact('created'));
    }
    public function CourseSwitch(Request $request)
    {
      $course = Course::find($request->id);
      $course->status=$request->stat=='true' ? 1 : 0 ;
      $course->save();
    }
    public function CourseEdit($id)
    {
      $course = Course::findOrFail($id);
      return view('admin.course.course_edit',compact('course'));
    }
    public function CourseUpdate(Request $request,$id)
    {
        $this->validate($request, [
            'name'=>'required|min:5',
            'class_time'=>'nullable',
            'subject'=>'nullable',
            'image'=>'nullable|image|mimes:jpeg,png,jpg',
        ]);
        $course = Course::findOrFail($id);
        if ($request->hasFile('image')) {
            $imageName=str_slug($request->name).'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('frontend/images/course-images'),$imageName);
            $course->image ='frontend/images/course-images/'.$imageName;
            }
        $course->name = $request->name;    
        $course->subject = $request->subject;
        $course->class_time = $request->class_time;
        $course->save();
        $updated = 'ok';
        return redirect()->route('admin.courses',compact('updated'));
    }
    public function CourseDestroy(Request $request)
    {
        $course = Course::find($request->id);
        if ($course->image) {
            unlink($course->image);
        }
        $course->delete();
        return redirect()->back();
    }

    public function Articles(Request $request)
    {
        $created = $request->created;
        $updated = $request->updated;
        $toasts = [$created,$updated];
        if ($request->has('name'))
             $articles = Article::where('name', 'LIKE', '%'.$request->get('name').'%')->paginate(6);
        else $articles = Article::paginate(6);
        return view('admin.article.articles_list',compact('articles','toasts'));
    }
    public function ArticleSwitch(Request $request)
    {
      $article = Article::find($request->id);
      $article->status=$request->stat=='true' ? 1 : 0 ;
      $article->save();
    }
    public function ArticleCreate()
    {
        return view('admin.article.article_create');
    }
    public function ArticleStore(Request $request)
    {
        $this->validate($request, [
            'name'=>'min:5',
            'title'=>'nullable',
            'content'=>'min:50',
            'image'=>'required|image|mimes:jpeg,png,jpg',
        ]);
        $article = new Article;
        if ($request->hasFile('image')) {
            $imageName=str_slug($request->name).'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('frontend/images/article-images'),$imageName);
            $article->image ='frontend/images/article-images/'.$imageName;
            }
        $article->name = $request->name;
        $article->title = $request->title;
        $article->slug = str_slug($request->name);
        $article->content = $request->content;
        $article->save();
        $created = 'ok';
        return redirect()->route('admin.articles',compact('created'));
    }
    public function ArticleEdit($id)
    {
      $article = Article::findOrFail($id);
      return view('admin.article.article_edit',compact('article'));
    }
    public function ArticleUpdate(Request $request,$id)
    {
        $this->validate($request, [
            'name'=>'min:5',
            'title'=>'nullable',
            'content'=>'min:50',
            'image'=>'image|mimes:jpeg,png,jpg',
        ]);
        $article = Article::findOrFail($id);
        if ($request->hasFile('image')) {
            $imageName=str_slug($request->name).'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('frontend/images/article-images'),$imageName);
            $article->image ='frontend/images/article-images/'.$imageName;
            }
        $article->name = $request->name;
        $article->title = $request->title;
        $article->slug = str_slug($request->name);
        $article->content = $request->content;
        $article->save();
        $updated = 'ok';
        return redirect()->route('admin.articles',compact('updated'));
    }
    public function ArticleDestroy(Request $request)
    {
        $article = Article::find($request->id);
        if ($article->image) {
            unlink($article->image);
        }
        $article->delete();
        return redirect()->back();
    }
}   