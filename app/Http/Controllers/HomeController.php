<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use App\Models\NadminController;




namespace App\Http\Controllers;
use App\Models\Category;

use Illuminate\Http\Request;
namespace App\Http\Controllers;



class HomeController extends Controller
{ 
    public function index()
    {
        
        $fixedUsername = 'fifi';
        $fixedPassword = '1234';
        return view('home.userpage');
    }
    public function db()
    {
        return view('home/db');
    }
    
    public function dbcatagory()
    {
        return view('home/dbcatagory');
    }
    public function nadmin()
    {
        return view('home/nadmin');
    }


    // public function store(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'name' => 'required|string|max:255',
    //     ]);

    //     Category::create($validatedData);

    //     return redirect('home/buy');
    // }
    



    public function contact()
    {
        return view('home/contact');
    }
    public function bmi()
    {
        return view('home/bmi');
    }
    public function order()
    {
        return view('home/order');
    }
    public function buy()
    {
        return view('home/buy');
    }
    public function addtocart()
    {
        return view('home/addtocart');
    }
    public function delivery()
    {
        return view('home/delivery');
    }
    public function payment()
    {
        return view('home/payment');
    }
    public function login()
    {
        return view('home/login');
    }
    public function reg()
    {
        return view('home/reg');
    }
    public function bot()
    {
        return view('home/bot');
    }
    public function blog()
    {
        return view('home/blog');
    }
    public function plan()
    {
        return view('home/plan');
    }

    public function abs()
    {
        return view('home/abs');
    }
    public function arms()
    {
        return view('home/arms');
    }
    public function glutes()
    {
        return view('home/glutes');
    }
    public function card()
    {
        return view('home/card');
    }
    public function legs()
    {
        return view('home/legs');
    }
    public function blogp1()
    {
        return view('home/blogp1');
    }
    public function blogp2()
    {
        return view('home/blogp2');
    }
    public function blogp3()
    {
        return view('home/blogp3');
    }
    public function congo()
    {
        return view('home/congo');
    }
    public function adminlogin()
    {
        return view('home/adminlogin');
    }
    public function motivation()
    {
        return view('home/motivation');
    }
    public function quote()
    {
        return view('home/quote');
    }
    public function creview()
    {
        return view('home/creview');
    }
    public function forgetpassword()
    {
        return view('home/forgetpassword');
    }
    public function gymreviews()
    {
        return view('home/gymreviews');
    }
    public function glowup()
    {
        return view('home/glowup');
    }
    public function redirect()
    {
        $usertype=Auth:: user()-> usertype;
        if ($usertype=='1')
        {
            return view('admin.home');
        }
        else
        {
            return view('dashboard');
        }

    }

}


