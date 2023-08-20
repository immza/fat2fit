<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Makereglog;


class RegstrationController extends Controller
{ 
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'fname' => '',
            'lname' => '',
            'age' => '',
            'email' => '',
            'contact' => '',
            'gender' => '',
            'password' => '',
            // 'contact' => 'required|string|max:255',
            
        ]);

        Makereglog::create($validatedData);

        return redirect('login');
    }
}


