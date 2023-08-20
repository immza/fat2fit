<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Catagory;

class AddToCatagory extends Controller
{ 
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'category_name' => 'required|string|max:255', // Corrected field name
            'price' => 'required|string|max:255',
        ]);

        Catagory::create($validatedData);

        return redirect('buy');
    }
}